<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Nino Nakano",
            "slug" => "nino-nakano",
            "author" => "324974",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor itaque error temporibus aspernatur velit possimus qui praesentium, suscipit ab! Enim illum autem, illo eveniet aliquam soluta. Tempore aliquid debitis minus, alias tempora delectus adipisci aliquam exercitationem animi nesciunt nostrum eligendi officiis excepturi, labore numquam suscipit optio, temporibus facere sunt impedit necessitatibus doloribus dolores consectetur reprehenderit. Repudiandae autem esse nulla aspernatur sunt a corporis ratione. Possimus minus accusantium ullam asperiores recusandae laborum minima rem? Maxime laborum nam repellendus non ex soluta!"
        ],
        [
            "title" => "Miku Nakano",
            "slug" => "miku-nakano",
            "author" => "302668",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor itaque error temporibus aspernatur velit possimus qui praesentium, suscipit ab! Enim illum autem, illo eveniet aliquam soluta. Tempore aliquid debitis minus, alias tempora delectus adipisci aliquam exercitationem animi nesciunt nostrum eligendi officiis excepturi, labore numquam suscipit optio, temporibus facere sunt impedit necessitatibus doloribus dolores consectetur reprehenderit. Repudiandae autem esse nulla aspernatur sunt a corporis ratione. Possimus minus accusantium ullam asperiores recusandae laborum minima rem? Maxime laborum nam repellendus non ex soluta!"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
