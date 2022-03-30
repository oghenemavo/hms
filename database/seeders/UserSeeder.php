<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
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
        // 1. Admin
        User::create([
            'name' => 'HMS Admin',
            'email' => 'admin@hms.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        // 2. Other users
        User::factory(20)
        ->create()
        ->each(function($user) {
            $role = \App\Models\Role::find(Factory::create()->numberBetween(2,4));
            $user->roles()->attach($role);
        });
    }
}
