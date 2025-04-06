<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an admin user if not exists
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );

        // Create some predefined categories
        $categories = [
            'Technology',
            'Science',
            'Health',
            'Business',
            'Lifestyle',
            'Travel',
            'Food',
            'Sports',
        ];

        foreach ($categories as $categoryName) {
            Category::firstOrCreate(
                ['name' => $categoryName],
                [
                    'slug' => strtolower($categoryName),
                    'description' => "Articles about {$categoryName}",
                ]
            );
        }

        // Create some published articles
        Article::factory()
            ->count(20)
            ->published()
            ->create([
                'author_id' => $admin->id,
            ]);

        // Create some draft articles
        Article::factory()
            ->count(5)
            ->draft()
            ->create([
                'author_id' => $admin->id,
            ]);

        // Create some archived articles
        Article::factory()
            ->count(3)
            ->archived()
            ->create([
                'author_id' => $admin->id,
            ]);
    }
}
