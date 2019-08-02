<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        

        Role::create([
            'id' => '1',
            'role' => 'admin'
        ]);

        Role::create([
            'id' => '2',
            'role' => 'panneur'
        ]);
        Role::create([
            'id' => '3',
            'role' => 'depaneur'
        ]);




        //role


        User::create([
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'adresse' => 'kairouan',
            'phone' => '27432182',
            'password' => '27432182',
            'role' => '0'
        ]);

        User::create([
            'id' => '2',
            'name' => 'panneur',
            'email' => 'panneur@gmail.com',
            'adresse' => 'kairouan',
            'phone' => '27432182',
            'password' => '27432182',
            'role' => '1'
        ]);
        User::create([
            'id' => '3',
            'name' => 'depanneur',
            'email' => 'panneur@gmail.com',
            'adresse' => 'kairouan',
            'phone' => '27432182',
            'password' => '27432182',
            'role' => '2'
        ]);
    }
}