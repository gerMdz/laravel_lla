<?php

namespace Database\Factories;

use App\Models\Cursos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CursosFactory extends Factory
{
    protected $model = Cursos::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'nombre' => $this->faker->word(),
            'description' => $this->faker->text(),
        ];
    }
}
