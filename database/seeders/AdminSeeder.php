<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Super Admin',
            'userName' => 'superadmin',
            'email' => 'super@arymaid.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password123'),
        ]);
    }
}
