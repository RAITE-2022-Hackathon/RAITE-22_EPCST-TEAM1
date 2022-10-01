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
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'first_name' => 'admin',
            'middle_name' =>'no',
            'last_name' => 'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin'),
            'role'=>'admin',

        ]);
        User::create([
            'first_name' => 'paul',
            'last_name' => 'abutar',
            'middle_name' =>'no',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('user')
        ]);
        $this->call([PostSeeder::class],);
    }
}
