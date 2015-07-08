<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('users')->insert(array(
			'name'=>'Cristhian',
			'email'=>'cris.2305@hotmail.com',
			'password'=>\Hash::make('secret')
			));
	}

}
