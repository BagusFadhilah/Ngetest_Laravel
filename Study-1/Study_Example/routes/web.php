<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Bagus Ahfad Fadhilah',
        'email' => 'ahfadfadhilah@gmail.com',
        'image' => '20210801103.jpg'
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post-1",
            'slug' => 'judul-post-1',
            'author' => 'Bagus Ahfad Fadhilah',
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aliquam harum amet earum perspiciatis alias dignissimos voluptates, perferendis maiores doloremque excepturi, id dolor corrupti ex at exercitationem nemo facilis dolorum."
        ],
        [
            "title" => "Judul Post-2",
            'slug' => 'judul-post-2',
            'author' => 'Bagus Fadhilah',
            "body" => "Lumer ipsum dolor sit amet consectetur adipisicing elit. Vitae aliquam harum amet earum perspiciatis alias dignissimos voluptates, perferendis maiores doloremque excepturi, id dolor corrupti ex at exercitationem nemo facilis dolorum."
        ],
    ];
    return view('blog', [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});

Route::get('/porto', function () {
    return view('portofolio',[
        'title' => 'Porto'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});


//Halaman singel-post
Route::get('posts/{slug}', function ($slug) {
    
    $blog_posts = [
        [
            "title" => "Judul Post-1",
            'slug' => 'judul-post-1',
            'author' => 'Bagus Ahfad Fadhilah',
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aliquam harum amet earum perspiciatis alias dignissimos voluptates, perferendis maiores doloremque excepturi, id dolor corrupti ex at exercitationem nemo facilis dolorum."
        ],
        [
            "title" => "Judul Post-2",
            'slug' => 'judul-post-2',
            'author' => 'Bagus Fadhilah',
            "body" => "Lumer ipsum dolor sit amet consectetur adipisicing elit. Vitae aliquam harum amet earum perspiciatis alias dignissimos voluptates, perferendis maiores doloremque excepturi, id dolor corrupti ex at exercitationem nemo facilis dolorum."
        ],
    ];


    $new_post = [];
    foreach($blog_posts as $post){
        if($post['slug'] === $slug) {
            $new_posts = $post;
        }
    };

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_posts
    ]);
});