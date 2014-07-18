<?php 
class UsersTableSeeder extends Seeder
{
	public function run()
	{
		$user= new user();
		$user->email='bhoopal10@gmail.com';
		$user->username='bhoopal';
		$user->password=Hash::make('123');
		$user->active='1';
		$user->save();
	}
}