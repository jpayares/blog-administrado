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
            'name' => 'Jesus Payares',
            'email' => 'j.payares2@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::factory(50)->create();
    }
}
