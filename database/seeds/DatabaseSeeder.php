<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create();
        factory(App\Outlet::class, 30)->create();

        $this->call(SettingSeeder::class);
        $this->call(SelectionSeeder::class);
        $this->call(SurveySeeder::class);
        $this->call(SurveySelectionSeeder::class);
    }
}
