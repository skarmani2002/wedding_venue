<?php
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder 
{
    public function run()
    {
    	User::truncate();
        User::create(array('email' => 'jasonbourne501@gmail.com', 'password' => Hash::make('weddingvenue')));
	}
}	