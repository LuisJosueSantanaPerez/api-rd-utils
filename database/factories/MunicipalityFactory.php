<?php

namespace Database\Factories;

use App\Models\Municipality;
use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class MunicipalityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Municipality::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'province_id' => function () { return Province::all()->random(); },
            'name' => $this->faker->city,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
