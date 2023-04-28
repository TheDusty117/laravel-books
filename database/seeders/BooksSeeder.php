<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Book;
use App\Models\Genre;


class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $genre_ids = Genre::all()->pluck('id')->all();

        for ($i = 0; $i < 100; $i++){
            $newBook = new Book();

            $newBook->titolo = $faker->word;
            $newBook->autore = $faker->name;
            $newBook->numero_copie = $faker->numberBetween(1,200) ;
            $newBook->descrizione = $faker->paragraph(4,true);
            $newBook->genre_id = $faker->randomElement($genre_ids);

            $newBook->save();

            $newBook->genre()->associate($faker->randomElements($genre_ids, rand(0, 5)));
        }

    }
}
