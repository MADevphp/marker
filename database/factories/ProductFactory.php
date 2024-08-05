<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => rand(1,5),
            'name' => [
                'uz' => $this->faker->name(),
                'en' => $this->faker->name(),
                'ru' => 'лдвапопгавплвдап оплвао лдвап фыпвлщцу д у',
            ],
            'price' => rand(1213, 100000),
            'description' => [
                'uz' => $this->faker->text(),
                'en' => $this->faker->text(),
                'ru' => 'лыовл ывава овыавлы аоывавгашу  вшаао ввал афв'
            ],
        ];
    }
}
