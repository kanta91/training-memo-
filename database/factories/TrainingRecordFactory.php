<?php

namespace Database\Factories;

use App\Models\TrainingRecord;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainingRecord>
 */
class TrainingRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = TrainingRecord::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'date' => $this->faker->date(),
            'exercise' => $this ->faker->word(),
            'sets' => $this -> faker->numberBetween(1,5),
            'weight' => $this -> faker->numberBetween(10,100),
            'memo'=>$this ->faker->sentence(),
        ];
    }
}
