<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        Categoria::create(['categoria' => 'Terror']);
        Categoria::create(['categoria' => 'Drama']);
        Categoria::create(['categoria' => 'Romance']);
        Categoria::create(['categoria' => 'Ficção Científica']);
        Categoria::create(['categoria' => 'Pintura']);
    }
}
