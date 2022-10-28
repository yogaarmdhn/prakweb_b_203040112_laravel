<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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
        "name" => "Yoga Bagja Ramadhan",
        "email" => "203040112@mail.unpas.ac.id",
        "image" => "yoga.png"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yoga Bagja Ramadhan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, reprehenderit repudiandae. Iste nisi dolore omnis veniam doloremque saepe, sint quis, laboriosam aliquid temporibus impedit amet natus optio numquam, qui ex cum sit! Rem voluptate maiores quae tempore omnis quidem, ipsa adipisci odit fugit voluptatem, dolorem cupiditate. Quo impedit neque necessitatibus eum ratione, reprehenderit consequuntur odio nemo cupiditate nobis suscipit perspiciatis sunt est obcaecati distinctio nisi quae facilis. Repellat animi nemo, error voluptatibus mollitia porro praesentium non commodi molestiae repellendus aspernatur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Asril Permana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dignissimos, culpa totam laborum, obcaecati dicta voluptatum sed, praesentium fugiat reiciendis excepturi! Totam eveniet odit, eius blanditiis odio placeat! Earum ipsam facilis nulla iusto amet quia explicabo delectus veritatis tenetur ea eaque ex officia quibusdam porro suscipit laborum tempora cumque unde magnam animi a reprehenderit ipsum, quod repellendus. Maiores hic dolorum nesciunt sunt tempora maxime molestias, nostrum ratione consequuntur nulla corporis rerum iure possimus nihil accusantium doloremque porro, impedit esse quaerat quibusdam rem. Necessitatibus modi distinctio eveniet perferendis, libero voluptatum, ipsam doloremque excepturi commodi nam pariatur eligendi dolore blanditiis quo beatae?"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yoga Bagja Ramadhan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, reprehenderit repudiandae. Iste nisi dolore omnis veniam doloremque saepe, sint quis, laboriosam aliquid temporibus impedit amet natus optio numquam, qui ex cum sit! Rem voluptate maiores quae tempore omnis quidem, ipsa adipisci odit fugit voluptatem, dolorem cupiditate. Quo impedit neque necessitatibus eum ratione, reprehenderit consequuntur odio nemo cupiditate nobis suscipit perspiciatis sunt est obcaecati distinctio nisi quae facilis. Repellat animi nemo, error voluptatibus mollitia porro praesentium non commodi molestiae repellendus aspernatur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Asril Permana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dignissimos, culpa totam laborum, obcaecati dicta voluptatum sed, praesentium fugiat reiciendis excepturi! Totam eveniet odit, eius blanditiis odio placeat! Earum ipsam facilis nulla iusto amet quia explicabo delectus veritatis tenetur ea eaque ex officia quibusdam porro suscipit laborum tempora cumque unde magnam animi a reprehenderit ipsum, quod repellendus. Maiores hic dolorum nesciunt sunt tempora maxime molestias, nostrum ratione consequuntur nulla corporis rerum iure possimus nihil accusantium doloremque porro, impedit esse quaerat quibusdam rem. Necessitatibus modi distinctio eveniet perferendis, libero voluptatum, ipsam doloremque excepturi commodi nam pariatur eligendi dolore blanditiis quo beatae?"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
