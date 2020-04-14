<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'    => 'Miguel Suarez',
        	'email'   => 'miguel@mail.com',
        	//'password'=> Hash::make('password'),
        	'password'=> Hash::make('123456'),//123456
        	'remember_token'=> Str::random(40), 
        ]);
    }
}
