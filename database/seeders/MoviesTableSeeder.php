<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'Gladiator',
                'description' => 'Cuenta la vida de un soldado hispano romano que fue capturado y convertido a gladiador en la época de Cómodo.',
                'year' => 1994,
                'duration' => 155, // duración aproximada
                'director' => 'Ridley Scott',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Godfather',
                'description' => 'El anciano patriarca de una dinastía del crimen organizado transfiere el control de su imperio clandestino a su reticente hijo.',
                'year' => 1972,
                'duration' => 175, // duración aproximada
                'director' => 'Francis Ford Coppola',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'Cuando la amenaza conocida como el Joker emerge de su misterioso pasado, siembra el caos y el caos entre los habitantes de Gotham.',
                'year' => 2008,
                'duration' => 152, // duración aproximada
                'director' => 'Christopher Nolan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
