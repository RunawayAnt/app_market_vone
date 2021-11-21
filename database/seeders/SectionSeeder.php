<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'sname' => 'Juegos y Entretenimiento'
        ]);
        Section::create([
            'sname' => 'Ropa, Calzado y Accesorios'
        ]);
        Section::create([
            'sname' => 'Immuebles y Cosas para el Hogar'
        ]);
    }
}
