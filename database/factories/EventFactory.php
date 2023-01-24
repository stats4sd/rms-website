<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EventFactory extends Factory
{
    public function definition(): array
    {
        return [
            'all_day' => $this->faker->boolean(),
            'start' => Carbon::now(),
            'end' => Carbon::now(),
            'title' => $this->faker->word(),
            'body' => $this->faker->word(),
            'url' => $this->faker->url(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
