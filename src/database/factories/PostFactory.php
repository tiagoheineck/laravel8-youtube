<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(6),
            'content' => $this->faker->text(15),
            'slug'  => Str::slug($this->faker->unique()->text(6)),
            'tags'  => 'laravel',
            'user_id'   => User::factory()
        ];
    }
}
