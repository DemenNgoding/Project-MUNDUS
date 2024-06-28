<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        // Seed command: php artisan db:seed --class=UsersSeeder
        User::create([
            'user_id' => 1,
            'f_name' => 'bebek',
            'l_name' => 'terbang',
            'email' => 'bebek@example.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('Ab:123456'),
            'city' => 'Tangerang',
            'bio' => 'Ini Punya bebek',
            'birth_date' => Carbon::now(),
            'gender' => 'Male',
            'registration_date' => Carbon::now(),
        ]);
    }
}
