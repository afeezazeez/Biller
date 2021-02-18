<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $providers=['paystack','flutterwave','stripe'];

        return [
            'email'=> $this->faker->unique()->safeEmail,
            'billing_amount'=>rand(500.00, 20000.0),
            'billing_provider'=>$providers[array_rand($providers)]
        ];
    }
}
