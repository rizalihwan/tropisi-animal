<?php

use Illuminate\Database\Seeder;
use \App\User;
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
            'email' =>  'admin@gmail.com',
            'username' => 'rizalihwan',
            'password' => bcrypt('password')
        ]);
    }
}
