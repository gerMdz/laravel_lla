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
            'category' => ucfirst($this->faker->randomElement(['Framework', 'Librería', 'Vanilla'])),
            'nombre' => ucfirst($this->faker->word()),
            'description' => ucfirst($this->faker->paragraph()),
        ];
    }
}
