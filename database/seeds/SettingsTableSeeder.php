<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'DeBug',
            'address' => '144/11,Badulla',
            'contact_number' => '+9471 4754 328',
            'contact_email' => 'debug@info.com'
        ]);
    }
}
