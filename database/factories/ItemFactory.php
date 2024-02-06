<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'alias' => $this->faker->slug(),
            'article' => $this->faker->numberBetween(1987425, 3654721),
            'desc' => $this->faker->text(),
            'size' => $this->faker->randomElement(['1м', '2м', '3м', '4м', '5м']),
            'color' => $this->faker->randomElement(['Красный', 'Белый', 'Синий', 'Зеленый', 'Черный']),
            'material' => $this->faker->randomElement(['МДФ','ДСП','СДСП','ЛДСП']),
            // 'images' => $this->faker->imageUrl(640, 480, null, true, null, false, 'png')
        ];
    }
}
