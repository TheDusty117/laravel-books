<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Support\Str;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = ['Tom Clancy','Robert Greene','Steven King','J.R.R. Tolkien','Fabio Volo','Alberto Angela','Piero Angela','Francesco Sole','Federico Moccia'];

        foreach($authors as $author_name){

            $author = new Author();
            $author->name = $author_name;
            $author->slug = Str::slug($author_name);

            $author->save();

        }

    }
}
