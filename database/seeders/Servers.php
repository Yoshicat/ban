<?php

namespace Database\Seeders;

use App\Models\Server;
use Illuminate\Database\Seeder;

class Servers extends Seeder
{
	/**
	 * Run the database seeds.
	 * @return void
	 */
	public function run()
	{
		Server::create([
			'name' => 'TMSkyBlock',
			'api_class' => 'TMSkyBlock',
			'api_server' => '192.168.1.1',
			'api_key' => 'zxcvbn'
		]);
		
		Server::create([
			'name' => 'TechnoMagic 1',
			'api_class' => 'TechnoMagic',
			'api_server' => '192.168.2.1',
			'api_key' => 'qwerty'
		]);
		
		Server::create([
			'name' => 'TechnoMagic 2',
			'api_class' => 'TechnoMagic',
			'api_server' => '192.168.2.2',
			'api_key' => 'asdfgh'
		]);
		
		Server::create([
			'name' => 'HiTech',
			'api_class' => 'HiTech',
			'api_server' => '192.168.3.1',
			'api_key' => 'qawsed'
		]);
	}
}
