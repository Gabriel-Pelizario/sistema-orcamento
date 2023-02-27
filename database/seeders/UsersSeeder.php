<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // bcrypt = para encriptar a senha no banco
        User::create([
            'name' => 'Gabriel',
            'last_name' => 'Pelizario',
            'email' => 'gabrielpelizario2013@gmail.com',
            'password'=> bcrypt('13972526') 
        ]);

    }
}
