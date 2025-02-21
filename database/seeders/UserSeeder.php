<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'full_name' => 'Gian García',
            'email' => 'gian08@hotmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'full_name' => 'Tony Mendez',
            'email' => 'tonymendez@hotmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::factory(10)->create();
    }
}
