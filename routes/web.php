<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "AlBarra Permana",
        "email" => "albarrapermana027@gmail.com",
        "image" => "ppbartod.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_posts = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_posts = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_posts
    ]);
});
