<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data pengguna yang ingin ditambahkan
        $users = [
            ['nama' => 'Robi Sugara', 'email' => 'robisugara@gmail.com', 'ttl' => '2002-01-01', 'role' => 'Admin', 'gambar' => 'thahirudin.png', 'password' => bcrypt('password')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
