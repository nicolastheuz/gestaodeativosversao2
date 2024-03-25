<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'Pedro',
            'lastName' => 'Luan',
            'email' => 'contato@gmail.com',
            'password' => bcrypt('12345678'),

        ]);

        
    }
}
