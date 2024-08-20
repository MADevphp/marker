<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    public function run(): void
    {
        User::find(2)->addresses()->create([
            'latitude' => '12.323232',
            'longitude' => '12.323232',
            'district' => 'Mirzo U T',
            'region' => 'Andijon',
            'street' => 'Navbaxor Mahalla',
            'home' => 12
        ]);

        User::find(2)->addresses()->create([
            'latitude' => '32.3232121232',
            'longitude' => '42.32323221212',
            'region' => 'Andijon',
            'district' => 'Safar U T',
            'street' => 'Paxtakor Mahalla',
            'home' => 12
        ]);
    }
}
