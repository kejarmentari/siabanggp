<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            'app_name' => 'SIABANG GP',
            'app_full_name' => 'Sistem Informasi  Analisis Bangunan Gedung Pemerintah',
            'app_description' => 'Sistem ini dikembangkan untuk mendata Gedung Pemerintah kemudian mengelola data tersebut dalam sebuah database',
        ]);
    }
}
