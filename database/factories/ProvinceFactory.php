<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class ProvinceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Province::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country_id' => function () { return Country::all()->random(); },
            'name' => $this->faker->state,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}