<?php

use Illuminate\Database\Seeder;
use App\Model\admin\Setting;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            'id' => '1',


        ]);
    }
}
