<?php

namespace Database\Seeders;

use App\Models\Record;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 * @return void
	 */
	public function run()
	{
		$this->call([
			Roles::class,
			Servers::class,
			Rules::class,
			Punishments::class,
			SuperAdmin::class
		]);
		
		
		Record::factory()->count(650)->create();
		
		
	}
}
