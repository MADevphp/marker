<?php

namespace Database\Seeders;

use App\Enum\SettingType;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//      til seeder
        $setting = Setting::create([
            'name' => [
                'uz' => 'til',
                'en' => 'lang',
                'ru' => 'язик'
            ],
            'type' => SettingType::SELECT->value
        ]);

        $setting->values()->create([
           'name' => [
               'uz' => 'O\'zbekcha',
               'en' => 'Englischa',
               'ru' => 'Ruscha'
           ],
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'O\'zbek',
                'en' => 'English',
                'ru' => 'Russian'
            ],
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'O\'zbek',
                'en' => 'English',
                'ru' => 'Russian'
            ],
        ]);
//      end til seeder

//      pul birligi seeder
        $setting = Setting::create([
            'name' => [
                'uz' => 'Pul birligi',
                'en' => 'Valuta en',
                'ru' => 'Valuta ru'
            ],
            'type' => SettingType::SELECT->value
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'som',
                'en' => 'som',
                'ru' => 'sum'
            ],
        ]);
        $setting->values()->create([
            'name' => [
                'uz' => 'doller',
                'en' => 'doller',
                'ru' => 'doller'
            ],
        ]);
        $setting->values()->create([
            'name' => [
                'uz' => 'rubl',
                'en' => 'rubl',
                'ru' => 'rubl'
            ],
        ]);
//      end pul birligi

//      dark
        $setting = Setting::create([
            'name' => [
                'uz' => 'Dark Mode',
                'en' => 'Dark Mode en',
                'ru' => 'Dark Mode ru'
            ],
            'type' => SettingType::SWITCH->value
        ]);
//      end dark

//      Notifications
        $setting = Setting::create([
            'name' => [
                'uz' => 'Xabarnomalar',
                'en' => 'Notifications',
                'ru' => 'Xabarnomalar ru'
            ],
            'type' => SettingType::SWITCH->value
        ]);
//      end Notifications
    }
}
