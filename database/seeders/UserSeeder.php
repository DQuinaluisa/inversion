<?php

namespace Database\Seeders;

use  App\Models\User;
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
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'phone' => '0963302651',
            'password' => bcrypt('5up3rA6m1n')
        ])->assignRole('Admin');

        // User::factory(2)->create();
    }
}
