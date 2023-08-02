<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookModel = new Book();
        $books = $bookModel -> get();

        foreach ($books as $book){
            echo "Nama Buku : " .$book -> name_book. '<br>';
            echo "Deskripsi : " .$book -> description. '<br>';
            echo "Harga : " .$book -> price. '<br>';
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "This is create book...";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
