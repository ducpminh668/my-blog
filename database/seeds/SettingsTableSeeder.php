<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'site_name' => 'Laravel Blog',
            'address' => 'Russia, Peterburg',
            'contact_number' => '8 900 7546 4844',
            'contact_email' => 'info@laravel_blog.com'
        ]);
    }
}
