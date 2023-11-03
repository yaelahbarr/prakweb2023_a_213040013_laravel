<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => "AlBarra Permana",
            'email' => "albarrapermana027@gmail.com",
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'lorem ipsum ioahfiu uahdauia aoidho',
            'body' => 'lorem adnakbgfj iyagdsuiygau isagduisg kasjdguaig sadkjgajskg asjkjgfuy sajksj',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'lorem ipsum ioahfiu uahdauia aoidho',
            'body' => 'lorem adnakbgfj iyagdsuiygau isagduisg kasjdguaig sadkjgajskg asjkjgfuy sajksj',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
