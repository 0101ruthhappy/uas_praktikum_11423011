<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin ::create([
            'name' => 'Deny',
            'email' => 'deeny3366@gmail.com',
            'username' =>'Deny',
            'password' => bcrypt('dedenaja'),
        ]);
    }
}
