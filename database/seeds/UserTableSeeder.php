<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{
	public function run()
	{
		\DB::table('users')->insert(array(
			'name'	=> 'Leo',
			'email' => 'leon@hotmail.com',
			'password' => \Hash::make('secret')
			));
	}
}