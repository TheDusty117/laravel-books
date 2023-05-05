<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_book', function (Blueprint $table) {
            //creiamo 2 chiavi esterne che servono ai collegamenti
            $table->unsignedBigInteger('book_id');                      //se cancelli un libro, a cascata cancella tutte le cose annesse
            $table->foreign('book_id')->references('id')->on('books');   //->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->unsignedBigInteger('author_id');                    //CHIEDERE A COSA SERVONO QUESTI AI TUTOR
            $table->foreign('author_id')->references('id')->on('authors');   //->onDelete('CASCADE')->onUpdate('CASCADE');


            //rende unica questa relazione e non duplicabile.
            $table->unique(['book_id', 'author_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_book');
    }
};
