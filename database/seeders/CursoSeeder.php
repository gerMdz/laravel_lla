<?php

namespace Database\Seeders;

use App\Models\Cursos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Cursos();

        $curso->nombre = 'Laravel';
        $curso->description = 'Laravel es un framework PHP';
        $curso->category = 'Framework';

        $curso->save();

        $curso = new Cursos();

        $curso->nombre = 'Symfony';
        $curso->description = 'El mejor framework PHP';
        $curso->category = 'Framework';

        $curso->save();

        Cursos::factory(10)->create();
    }
}
