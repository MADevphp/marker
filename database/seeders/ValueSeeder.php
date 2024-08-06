<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qora',
                'en' => 'Black',
                'ru' => 'Черный'
            ],
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Sariq',
                'en' => 'Yellow',
                'ru' => 'Желтый'
            ]
        ]);
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'qizil',
                'en' => 'red',
                'ru' => 'красный'
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'yashil',
                'en' => 'green',
                'ru' => 'зеленый'
            ]
        ]);

        Value::create([//5
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Oq',
                'en' => 'White',
                'ru' => 'Белый'
            ]
        ]);

        Value::create([ //6
            'attribute_id' => 3,
            'name' => [
                'uz' => 'MDF',
                'en' => 'MDF',
                'ru' => 'МДФ'
            ]
        ]);


        Value::create([
            'attribute_id' => 3,
            'name' => [
                'uz' => 'L_MDF',
                'en' => 'L_MDF',
                'ru' => 'Л_МДФ'
            ]
        ]);

        Value::create([ //8
            'attribute_id' => 3,
            'name' => [
                'uz' => 'TAXTA',
                'en' => 'BOARD',
                'ru' => 'ДОСКА'
            ]
        ]);

        Value::create([//9
            'attribute_id' => 1,
            'name' => [
                'uz' => '1mm, 64sm',
                'en' => '1mm, 64sm',
                'ru' => '1мм, 64см'
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => '2.5mm, 84sm',
                'en' => '2.5mm, 84sm',
                'ru' => '2.5мм, 84см'
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => '1.20mm, 74sm',
                'en' => '1.20mm, 74sm',
                'ru' => '1.20мм, 74см'
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => '2mm, 164mm',
                'en' => '2mm, 164mm',
                'ru' => '2мм, 164мм'
            ]
        ]);
    }
}
