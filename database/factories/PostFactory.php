<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'donatorname' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'amount' => mt_rand(1, 50),
            'message' => Str::random(20),
            'date' => Carbon::createFromDate(2023, 4, rand(1, 31))
        ];
    }
}
