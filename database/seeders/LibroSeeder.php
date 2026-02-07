<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    Libro::create([
        'titulo' => 'Cien Años de Soledad',
        'paginas' => 471,
        'disponible' => true,
        'publicado' => '1967-05-30'
    ]);

    Libro::create([
        'titulo' => 'El Principito',
        'paginas' => 96,
        'disponible' => true,
        'publicado' => '1943-04-06'
    ]);

    Libro::create([
        'titulo' => 'Don Quijote de la Mancha',
        'paginas' => 863,
        'disponible' => false,
        'publicado' => '1605-01-16'
    ]);
}

}
