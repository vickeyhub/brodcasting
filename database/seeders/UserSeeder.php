<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('pass@123'),
                'user_role' => 'admin'
            ],
            [
                'name' => 'Customer User',
                'email' => 'john@gmail.com',
                'password' => Hash::make('pass@123'),
                'user_role' => 'customer'
            ]
        ];
        User::create($data);
    }
}
