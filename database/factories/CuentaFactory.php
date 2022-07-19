<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\cuentas;
use Faker\Generator as Faker;

class CuentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id_usuario'=>$faker->number,
            'address'=>$faker->sentence,
            'nombre'=>$faker->name
        ];
    }
}
