<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);
        // User::factory(10)->create();
        $categories = [
            'Technology','Health','Travel','Science','Education','Politics',
        ];

        foreach($categories as $category) {
            Category::create(['name' => $category]);
        }

        Post::factory(100)->create();


    }
}
