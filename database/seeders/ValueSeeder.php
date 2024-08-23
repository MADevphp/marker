<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attribute = Attribute::find(1);

        $attribute->values()->create([
            'name' => [
                'uz' => 'Qora',
                'en' => 'Black',
                'ru' => 'Черный'
            ],
        ]);

        $attribute->values()->create([
            'name' => [
                'uz' => 'Sariq',
                'en' => 'Yellow',
                'ru' => 'Желтый'
            ]
        ]);

        $attribute->values()->create([
            'name' => [
                'uz' => 'qizil',
                'en' => 'red',
                'ru' => 'красный'
            ]
        ]);

        $attribute = Attribute::find(2);

        $attribute->values()->create([
            'name' => [
                'uz' => 'yashil',
                'en' => 'green',
                'ru' => 'зеленый'
            ]
        ]);

        $attribute->values()->create([
            'name' => [
                'uz' => 'Oq',
                'en' => 'White',
                'ru' => 'Белый'
            ]
        ]);

        $attribute = Attribute::find(3);

        $attribute->values()->create([
            'name' => [
                'uz' => 'MDF',
                'en' => 'MDF',
                'ru' => 'МДФ'
            ]
        ]);


        $attribute->values()->create([
            'name' => [
                'uz' => 'L_MDF',
                'en' => 'L_MDF',
                'ru' => 'Л_МДФ'
            ]
        ]);

        $attribute->values()->create([
            'name' => [
                'uz' => 'TAXTA',
                'en' => 'BOARD',
                'ru' => 'ДОСКА'
            ]
        ]);

        $attribute = Attribute::find(1);

        $attribute->values()->create([
            'name' => [
                'uz' => '1mm, 64sm',
                'en' => '1mm, 64sm',
                'ru' => '1мм, 64см'
            ]
        ]);

        $attribute->values()->create([
            'name' => [
                'uz' => '2.5mm, 84sm',
                'en' => '2.5mm, 84sm',
                'ru' => '2.5мм, 84см'
            ]
        ]);

        $attribute->values()->create([
            'name' => [
                'uz' => '1.20mm, 74sm',
                'en' => '1.20mm, 74sm',
                'ru' => '1.20мм, 74см'
            ]
        ]);

        $attribute->values()->create([
            'name' => [
                'uz' => '2mm, 164mm',
                'en' => '2mm, 164mm',
                'ru' => '2мм, 164мм'
            ]
        ]);
    }
}
