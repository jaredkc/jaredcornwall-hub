<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();
        $body = collect($this->faker->paragraphs(rand(5, 10)))
            ->map(fn($paragraph) => "<p>{$paragraph}</p>")
            ->join('');

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $body,
            'excerpt' => $this->faker->paragraph(),
            'featured_image' => $this->faker->imageUrl(1200, 630),
            'status' => $this->faker->randomElement(['draft', 'published', 'archived']),
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'view_count' => $this->faker->numberBetween(0, 1000),
            'published_at' => $this->faker->optional(0.8)->dateTimeBetween('-1 year', 'now'),
        ];
    }

    /**
     * Indicate that the article is published.
     */
    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'published',
            'published_at' => now(),
        ]);
    }

    /**
     * Indicate that the article is a draft.
     */
    public function draft(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'draft',
            'published_at' => null,
        ]);
    }

    /**
     * Indicate that the article is archived.
     */
    public function archived(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'archived',
            'published_at' => $this->faker->dateTimeBetween('-1 year', '-1 month'),
        ]);
    }
}
