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
        User::factory(3)->create();

        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Udin',
        //     'email' => 'udin@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // User::create([
        //     'name' => 'Asep',
        //     'email' => 'asep@gmail.com',
        //     'password' => bcrypt('54321'),
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

    }
}
