<?php

namespace Database\Factories;

use App\Models\Record;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecordFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 * @var string
	 */
	protected $model = Record::class;
	
	/**
	 * Define the model's default state.
	 * @return array
	 */
	public function definition()
	{
		return [
			'nickname' => $this->faker->name(),
			'moderator' => 1,
			'server' => $this->faker->numberBetween(1, 4),
			'rule' => $this->faker->numberBetween(1, 6),
			'punishment' => $this->faker->numberBetween(1, 3),
			'upto' => $this->faker->dateTimeBetween('+10 days', '+1 year')
		];
	}
}
