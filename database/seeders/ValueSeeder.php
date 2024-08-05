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
                'uz' => 'Oq',
                'en' => 'White',
                'ru' => 'Белый'
            ]
        ]);

        Value::create([
            'attribute_id' => 3,
            'name' => [
                'uz' => 'MDF',
                'en' => 'MDF',
                'ru' => 'МДФ'
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'LDSP',
                'en' => 'LDSF',
                'ru' => 'ЛДСФ'
            ]
        ]);
    }
}
