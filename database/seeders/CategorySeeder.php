<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
                'uz' => 'Eshik',
                'ru' => 'Дверь'
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'yotoq',
                'ru' => 'Кровать'
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'kreslo',
                'ru' => 'Кресло'
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'стул'
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'Shkaf',
                'ru' => 'Шкаф'
            ]
        ]);
    }
}