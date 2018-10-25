<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'email' => 'admin@ha6.ru',
            'password' => bcrypt('123456')
        ]);
    }
}
