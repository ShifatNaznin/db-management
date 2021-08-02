<?php

namespace Database\Factories;

use App\Models\UserInformation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserInformationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserInformation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registration_number' => $this->faker->registration_number(),
            'full_name' => $this->faker->full_name(),
            'phone' => $this->faker->phone(),
            'email' => $this->faker->unique()->safeEmail(),
            'division' => $this->faker->division(),
            'status' => $this->faker->status(),
            'ammount' => $this->faker->ammount(),
      
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    // public function unverified()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'email_verified_at' => null,
    //         ];
    //     });
    // }
}
