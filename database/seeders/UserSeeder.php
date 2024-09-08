<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan untuk mengimpor model User
use Illuminate\Support\Facades\Hash;

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
            'name' => 'jonojono',
            'email' => 'jono@test.com',
            'password' => Hash::make('jonojono'), // Menggunakan hashing untuk password
        ]);

    }
}
