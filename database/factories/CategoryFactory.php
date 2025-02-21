<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(10);
        $width = 640; // width of the image
        $height = 480; // height of the image
        $imageUrl = "https://picsum.photos/seed/seed1/{$width}/{$height}";

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'image' => $imageUrl,
            'is_featured' => $this->faker->boolean(),
            'status' => $this->faker->boolean(),
        ];
    }
}
