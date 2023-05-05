<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Author;



class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $authors_ids = Author::all()->pluck('id')->all();

        $genre_ids = Genre::all()->pluck('id')->all();

        for ($i = 0; $i < 100; $i++){
            $newBook = new Book();

            $newBook->titolo = $faker->word;
            $newBook->numero_copie = $faker->numberBetween(1,200) ;
            $newBook->descrizione = $faker->paragraph(4,true);
            $newBook->genre_id = $faker->randomElement($genre_ids);

            $newBook->save();

            $newBook->authors()->attach($faker->randomElements($authors_ids, rand(1, 3)));

            // $newBook->genre()->associate($faker->randomElements($genre_ids, rand(0, 5)));
        }

    }
}
