<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'first_name' => 'Alisher',
            'last_name' => 'Aliyev',
            'email' => 'alisher@gmail.com',
            'phone' => '+998914805393',
            'password' => Hash::make('123456'),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'first_name' => 'Alisher',
            'last_name' => 'Aliyev',
            'email' => 'alisher12@gmail.com',
            'phone' => '+998914800894',
            'password' => Hash::make('123456'),
        ]);
        $user->assignRole('editor');

        $user = User::create([
            'first_name' => 'Alisher',
            'last_name' => 'Aliyev',
            'email' => 'ali@gmail.com',
            'phone' => '+998914800893',
            'password' => Hash::make('123456'),
        ]);
        $user->assignRole('helpdesk-support');

        $user = User::create([
            'first_name' => 'Abdulloh',
            'last_name' => 'Aliyev',
            'email' => 'abdulloh@gmail.com',
            'phone' => '+998914801204',
            'password' => Hash::make('123456'),
        ]);
        $user->assignRole('shop-manager');

        $users = User::factory()->count(13)->create();
        foreach ($users as $user) {
            $user->assignRole('customer');
        }
    }
}
