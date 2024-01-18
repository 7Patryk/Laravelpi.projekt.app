<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\People;

class PeopleFactory extends Factory
{
    protected $model=People::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'lastName'=> $this->faker->lastName(),
            'phoneNumber'=> $this->faker->phoneNumber(),
            'street'=> $this->faker->streetAddress(),
            'city'=> $this->faker->city(),
            'country'=> $this->faker->country(),
            ];
    }
}
