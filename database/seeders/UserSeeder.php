<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@rentnhop.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'role_id' => 1,
        ]);
    }
}
