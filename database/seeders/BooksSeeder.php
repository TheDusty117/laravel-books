<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++){
            $newBook = new Book();

            $newBook->titolo = $faker->word;
            $newBook->autore = $faker->name;
            $newBook->genere = $faker->word;
            $newBook->numero_copie = $faker->numberBetween(1,200) ;
            $newBook->descrizione = $faker->paragraph(4,true);


            $newBook->save();
        }


    }
}
