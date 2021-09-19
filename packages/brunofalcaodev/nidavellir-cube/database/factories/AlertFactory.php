<?php

namespace Nidavellir\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Nidavellir\Cube\Models\Alert;
use Nidavellir\Cube\Models\Api;

class AlertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alert::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'headers' => uniqid(),
            'body' => 'Kucoin Api',
            'order_id' => null
        ];
    }
}
