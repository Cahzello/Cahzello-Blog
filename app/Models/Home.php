<?php

namespace App\Models;


class Home 
{
    private static $post_home = [
        [
            "judul" => "Nana Daiba",
            "body" => "Nana Daiba (大場 なな, Daiba Nana) is a character in the Shōjo☆Kageki Revue Starlight franchise. She is a second-year student from the Actor Training Department at Seisho Music Academy's 99th Graduating Class. This Stage Girl is the de facto mother of the 99th class, kind and caring to her classmates. Nicknamed \"Banana\". Talented not only in singing and dancing, but also as a director. Still delighted by the group performance of \"Starlight\" back in her first year.", 
            "image" => "img1.jpg",
        ],
        [
            "judul" => "Hikari Kagura",
            "body" => "Hikari Kagura (神楽 ひかり, Kagura Hikari) is the deuteragonist of the Shōjo☆Kageki Revue Starlight franchise. She is a second-year student from the Actor Training Department at Seisho Music Academy's 99th Graduating Class.

            Karen's childhood friend. A born performer who studied at an acting school in England. Her fate has been linked with Karen's since viewing a performance of \"Starlight\". Reuniting with her old friend, she is driven by a strong desire to join the mysterious Revue.",
            "image" => "img2.jpg",
        ],
        [
            "judul" => "Karen Aijo",
            "body" => "Karen Aijo (愛城 華恋, Aijō Karen) is the protagonist of the Shōjo☆Kageki Revue Starlight franchise. She is a second-year student from the Actor Training Department at Seisho Music Academy's 99th Graduating Class.

            She set out on the road to becoming a Stage Girl after being captivated by a performance of \"Starlight\" she saw as a child. She is always boisterous and cheerful, but hates early morning lessons. She joins the mysterious Revue with Hikari Kagura, who crossed fates with her when they were young girls.",
            "image" => "img3.jpg",
        ]
    ];

    public static function all(){
        return collect(self::$post_home);
    }
    
}
