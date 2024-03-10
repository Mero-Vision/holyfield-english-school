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
            'name' => 'Dipen Limbu',
            'dob' => '2000-02-20',
            'email' => 'info.holyfield.dipen@gmail.com',
            'gender' => 'Male',
            'password' => Hash::make('Password'),
            'address' => 'Kachankawal-07, Jhapa',
            'mobile_no' => '9840393746',
            'email_verified_at' => Carbon::now(),
            'user_role' => 'admin',

        ];

        User::firstOrCreate(['email' => $admindata['email']], $admindata);
    }
}