<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
            'name'=> 'admin',
            'email'=> 'admin@example.com',
            'role' => 'admin',
            'password'=>Hash::make('admin'),
       ]);
       User::create([
        'name'=> 'staff',
        'email'=> 'staff@example.com',
        'role' => 'staff',
        'password'=>Hash::make('staff'),
   ]);
       User::factory(10)->create();
    }
}
