<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Arymaid Admin',
                'email' => 'admin@arymaid.com',
                'password' => \Illuminate\Support\Facades\Hash::make('password123'),
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
            ]
        ];

        foreach ($users as $u) {
            user::create($u);
        }

        user::factory(5)->create();
    }
}
