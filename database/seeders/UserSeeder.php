<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('987654'),
        ]);

        $admin->assignRole('admin');

        $petugas = User::create([
            'name' => 'Petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('alamak'),
        ]);

        $petugas->assignRole('petugas');

        $user = User::create([
            'name' => 'User',
            'email' => 'andhika@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $user->assignRole('user');
    }
}
