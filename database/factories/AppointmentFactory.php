<?php

namespace Database\Factories;

use App\Models\Master;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'master_id' => Master::factory(),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'busy' => $this->faker->boolean(),
        ];
    }
}
