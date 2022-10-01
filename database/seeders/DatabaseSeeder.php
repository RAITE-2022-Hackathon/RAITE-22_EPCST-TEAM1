<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name'=>'admin',
            'last_name'=>'admin',
            'email'=>'admin@example.com',
            'password'=>Hash::make('admin'),
            'role'=>'admin',
       ]);
       User::factory(10)->create();
    }
}
