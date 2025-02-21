<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        $title = $this->faker->unique()->realText(55);
        $width = 640; // width of the image
        $height = 480; // height of the image
        $imageUrl = "https://picsum.photos/seed/seed1/{$width}/{$height}";

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'introduction' => $this->faker->realText(255),
            'image' => $imageUrl,
            'body' =>  $this->faker->text(2000),
            'status' => $this->faker->boolean(),
            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
