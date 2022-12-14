<?php

namespace Database\Seeders;


use App\Models\User; 

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'ryankaabel@gmail.com';
        $admin->password = bcrypt('password');
        $admin->save();
    }
}
