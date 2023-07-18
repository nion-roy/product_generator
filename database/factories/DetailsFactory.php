<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Details>
 */
class DetailsFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			
			'price' => fake()->randomNumber(4, false),
			'qty' => fake()->randomNumber(1, 200),
			'color' => fake()->colorName(),
			'category' => fake()->unique()->word(),
			'sub_category' => fake()->unique()->word(),
			'code' => fake()->unique()->randomNumber(5, true),
			'details' => fake()->paragraph(),
		];
	}
}
