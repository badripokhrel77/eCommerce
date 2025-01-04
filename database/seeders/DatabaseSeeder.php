<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $admin = new User();
        $admin->firstname = 'Admin';
        $admin->lastname = 'Admin';
        $admin->phone = '9800000001';
        $admin->address = 'nepal';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make("admin21");
        $admin->role = "admin";
        $admin->save();
    }
}
