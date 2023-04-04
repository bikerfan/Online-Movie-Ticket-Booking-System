<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name'=>'Admin',
           'email'=>'admin@gmail.com',
           'role'=>'admin',
           'phone'=>'123456789',
           'password'=>bcrypt('12345'),
           'password_confirmation'=>bcrypt('12345'),
        ]);
    }
}