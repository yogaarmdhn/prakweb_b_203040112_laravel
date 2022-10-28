<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
