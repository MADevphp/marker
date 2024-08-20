<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Alisher',
            'last_name' => 'Aliyev',
            'email' => 'alisher@gmail.com',
            'phone' => '+998914805393',
            'password' => Hash::make('123456'),
        ])->roles()->attach(1);

        User::create([
            'first_name' => 'Abdulloh',
            'last_name' => 'Aliyev',
            'email' => 'abdulloh@gmail.com',
            'phone' => '+998914801204',
            'password' => Hash::make('123456'),
        ])->roles()->attach(1);

        User::factory()->count(13)->hasAttached([Role::find(2)])->create();
    }
}
