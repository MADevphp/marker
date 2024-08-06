<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryMethod::create([
           'name' => [
               'uz' => 'bepul',
               'en' => 'free of charge',
               'ru' => 'бесплатно'
           ],
            'estimated_time' => [
                'uz' => '5 ish kun',
                'en' => '5 working days',
                'ru' => '5 рабочих дня'
            ],
            'sum' => '0'
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Standard',
                'en' => 'Standard',
                'ru' => 'Стандартный'
            ],
            'estimated_time' => [
                'uz' => '3 ish kun',
                'en' => '3 working days',
                'ru' => '3 рабочих дня'
            ],
            'sum' => '15000'
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'tez yetkazib berish',
                'en' => 'fast delivery',
                'ru' => 'быстрая доставка'
            ],
            'estimated_time' => [
                'uz' => '1 ish kun',
                'en' => '1 working days',
                'ru' => '1 рабочих дня'
            ],
            'sum' => '20000'
        ]);
    }
}
