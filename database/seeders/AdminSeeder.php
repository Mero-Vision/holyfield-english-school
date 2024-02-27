<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admindata = [
            'name' => 'Admin One',
            'email' => 'dipenlimbu@gmail.com',
            'gender' => 'Male',
            'password' => Hash::make('Password'),
            'address' => 'US',
            'mobile_no' => '+5654475',
            'email_verified_at' => Carbon::now(),
            'user_role' => 'admin',

        ];

        User::firstOrCreate(['email' => $admindata['email']], $admindata);
    }
}