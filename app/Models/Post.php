<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category() {
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
