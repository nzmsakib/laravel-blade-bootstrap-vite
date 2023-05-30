<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'engrsakibcse@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('Super Admin');
    }
}
