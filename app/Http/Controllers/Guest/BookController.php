<?php

namespace App\Http\Controllers\Guest;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'titolo' => 'required|max:100|min:2',
            'autore' => 'string|nullable',
            'numero_copie' => 'required',
            'descrizione' => 'required|min:5',

        ]);

        $data = $request->all();
        $new_book = new Book();

        $new_book->titolo = $data['titolo'];
        $new_book->autore = $data['autore'];
        $new_book->numero_copie = $data['numero_copie'];
        $new_book->descrizione = $data['descrizione'];

        $new_book->save();

        return to_route('books.show',$new_book);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view ('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view ('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)

    {

        $data = $request->validate([

            'titolo' => 'required|max:100|min:2',
            'autore' => 'string|nullable',
            'numero_copie' => 'required',
            'descrizione' => 'required|min:5',

        ]);

        $data = $request->all();

        $book->titolo = $data['titolo'];
        $book->autore = $data['autore'];
        $book->numero_copie = $data['numero_copie'];
        $book->descrizione = $data['descrizione'];

        $book->save();

        return to_route('books.show',$book);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return to_route('books.index');
    }
}
