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
        $category = Category::create([
            'name' => [
                'uz' => 'Eshik',
                'ru' => 'Дверь'
            ]
        ]);

            $category->childCategories()->create([
                'name' => [
                    'uz' => 'akfa',
                    'ru' => 'акфа'
                ]
            ]);

            $category->childCategories()->create([
                'name' => [
                    'uz' => 'alutex',
                    'ru' => 'алютех'
                ]
            ]);

            $childCategory = $category->childCategories()->create([
                'name' => [
                    'uz' => 'yogoch eshiklar',
                    'ru' => 'ёгоч ешик'
                ]
            ]);

                $childCategory->childCategories()->create([
                    'name' => [
                        'uz' => 'tol eshik',
                        'ru' => 'тол ешик'
                    ]
                ]);

                $childCategory->childCategories()->create([
                    'name' => [
                        'uz' => 'yongoq eshik',
                        'ru' => 'ёнгок ешик'
                    ]
                ]);

                $childCategory->childCategories()->create([
                    'name' => [
                        'uz' => 'terak eshik',
                        'ru' => 'терак ешик'
                    ]
                ]);




        Category::create([
            'name' => [
                'uz' => 'yotoq',
                'ru' => 'Кровать'
            ]
        ]);

        $kresloCategory = Category::create([
            'name' => [
                'uz' => 'kreslo',
                'ru' => 'Кресло'
            ]
        ]);

            $kresloCategory->childCategories()->create([
                'name' => [
                    'uz' => 'Gaming',
                    'ru' => 'Геминг'
                ]
            ]);

            $kresloCategory->childCategories()->create([
                'name' => [
                    'uz' => 'Offis',
                    'ru' => 'Оффис'
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
