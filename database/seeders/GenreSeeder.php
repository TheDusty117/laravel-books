<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['Giallo', 'Romanzo', 'Horror', 'Romantico','Thriller','Avventura'];

        foreach ($genres as $item) {
            $genre = new Genre();
            $genre->name = $item;
        }
    }
}
