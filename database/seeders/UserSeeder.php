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
            'name' => 'Axcel Sting Anchante',
            'email' => 'axcelsting345@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Gianfranco Tapia Diaz',
            'email' => 'sik77mo@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Businessman');

        User::create([
            'name' => 'Luis Nestares Torres',
            'email' => 'sa0020271@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Client');

        // User::factory(9)->create();
    }
}
