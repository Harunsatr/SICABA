<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin SICABA',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin12345'),
        ]);

        $admin->assignRole('admin');
    }
}
