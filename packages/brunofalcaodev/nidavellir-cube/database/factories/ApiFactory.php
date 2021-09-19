<?php

namespace Nidavellir\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Nidavellir\Cube\Models\Api;

class ApiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Api::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hashcode' => uniqid(),
            'description' => 'Kucoin Api',
            'exchange_id' => 1,
            'user_id' => 1,
            'api_key' => Str::random(20),
            'api_secret' => Str::random(10),
            'api_passphrase' => Str::random(6),
        ];
    }
}
