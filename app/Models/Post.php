<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "AlBarra Permana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed architecto dolore blanditiis beatae minus corrupti repellendus, et tenetur maxime non cum quibusdam animi officiis, totam delectus voluptas eligendi. Maiores earum quam, sunt commodi dolorem quasi accusantium molestiae sapiente quos impedit eligendi quibusdam quidem repudiandae aperiam quia voluptates iure delectus, illum natus architecto expedita? Ullam quos unde commodi voluptate maxime doloremque cumque, possimus aut deleniti beatae repellat! Itaque nemo, fugiat aperiam id sequi, voluptatem maxime nesciunt a sed sapiente distinctio numquam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Syahnan Azahra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed architecto dolore blanditiis beatae minus corrupti repellendus, et tenetur maxime non cum quibusdam animi officiis, totam delectus voluptas eligendi. Maiores earum quam, sunt commodi dolorem quasi accusantium molestiae sapiente quos impedit eligendi quibusdam quidem repudiandae aperiam quia voluptates iure delectus, illum natus architecto expedita? Ullam quos unde commodi voluptate maxime doloremque cumque, possimus aut deleniti beatae repellat! Itaque nemo, fugiat aperiam id sequi, voluptatem maxime nesciunt a sed sapiente distinctio numquam."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
