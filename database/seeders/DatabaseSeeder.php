<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Udin',
            'email' => 'udin@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Asep',
            'email' => 'asep@gmail.com',
            'password' => bcrypt('54321'),
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quas eos iusto fugiat nihil natus et dolore!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quas eos iusto fugiat nihil natus et dolore! Laboriosam laborum neque perspiciatis quisquam quam tempora dolor magni iste, excepturi maiores. Ipsum perspiciatis harum asperiores voluptate assumenda fugiat enim labore impedit, fuga quo aut nam, non, explicabo obcaecati optio unde perferendis nulla dolor porro? Eaque laboriosam illo, ad eos dolorem voluptatem provident quo maiores minus, accusamus ratione ipsam nam molestiae amet itaque tempora exercitationem vel magni autem qui minima? Voluptatibus quam fugit accusamus nam quaerat culpa officia labore rem aut adipisci, consectetur dolorum expedita sequi ab voluptate autem maxime cum neque at?',
            'category_id' => 1,
            'user_id' => 1,
        ]);
           
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quas eos iusto fugiat nihil natus et dolore!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quas eos iusto fugiat nihil natus et dolore! Laboriosam laborum neque perspiciatis quisquam quam tempora dolor magni iste, excepturi maiores. Ipsum perspiciatis harum asperiores voluptate assumenda fugiat enim labore impedit, fuga quo aut nam, non, explicabo obcaecati optio unde perferendis nulla dolor porro? Eaque laboriosam illo, ad eos dolorem voluptatem provident quo maiores minus, accusamus ratione ipsam nam molestiae amet itaque tempora exercitationem vel magni autem qui minima? Voluptatibus quam fugit accusamus nam quaerat culpa officia labore rem aut adipisci, consectetur dolorum expedita sequi ab voluptate autem maxime cum neque at?',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quas eos iusto fugiat nihil natus et dolore!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quas eos iusto fugiat nihil natus et dolore! Laboriosam laborum neque perspiciatis quisquam quam tempora dolor magni iste, excepturi maiores. Ipsum perspiciatis harum asperiores voluptate assumenda fugiat enim labore impedit, fuga quo aut nam, non, explicabo obcaecati optio unde perferendis nulla dolor porro? Eaque laboriosam illo, ad eos dolorem voluptatem provident quo maiores minus, accusamus ratione ipsam nam molestiae amet itaque tempora exercitationem vel magni autem qui minima? Voluptatibus quam fugit accusamus nam quaerat culpa officia labore rem aut adipisci, consectetur dolorum expedita sequi ab voluptate autem maxime cum neque at?',
            'category_id' => 2,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Kempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quas eos iusto fugiat nihil natus et dolore!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quas eos iusto fugiat nihil natus et dolore! Laboriosam laborum neque perspiciatis quisquam quam tempora dolor magni iste, excepturi maiores. Ipsum perspiciatis harum asperiores voluptate assumenda fugiat enim labore impedit, fuga quo aut nam, non, explicabo obcaecati optio unde perferendis nulla dolor porro? Eaque laboriosam illo, ad eos dolorem voluptatem provident quo maiores minus, accusamus ratione ipsam nam molestiae amet itaque tempora exercitationem vel magni autem qui minima? Voluptatibus quam fugit accusamus nam quaerat culpa officia labore rem aut adipisci, consectetur dolorum expedita sequi ab voluptate autem maxime cum neque at?',
            'category_id' => 2,
            'user_id' => 2,
        ]);
    }
}
