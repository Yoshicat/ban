<?php

namespace Database\Seeders;

use App\Models\Punishment;
use Illuminate\Database\Seeder;

class Punishments extends Seeder
{
	/**
	 * Run the database seeds.
	 * @return void
	 */
	public function run()
	{
		Punishment::create([
			'name' => 'Мут',
			'call_method' => false,
			'method' => 'mute'
		]);
		
		Punishment::create([
			'name' => 'Тюрьма',
			'call_method' => false,
			'method' => 'jail'
		]);
		
		Punishment::create([
			'name' => 'Бан',
			'call_method' => true,
			'method' => 'ban'
		]);
	}
}
