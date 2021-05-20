<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdmin extends Seeder
{
	/**
	 * Run the database seeds.
	 * @return void
	 */
	public function run()
	{
		$user = User::create([
			'name' => 'Super Admin',
			'email' => 'sidorkin.andrey@gmail.com',
			'email_verified_at' => now(),
			'password' => Hash::make('123123')
		]);
		
		$user->assignRole('admin');
	}
}
