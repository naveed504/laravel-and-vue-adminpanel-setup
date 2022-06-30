<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fetchbooks =Book::all()->toArray();
        return array_reverse($fetchbooks);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::create([
            'book_name' =>ucwords($request->bookname),
            'book_author' =>ucwords($request->authorname),
            'book_publisher' => ucwords($request->publisher),
        ]);
        return response()->json('Book Created Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Book::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $book = Book::find($request->id);
        $book->update([
            'book_name' =>ucwords($request->book_name),
            'book_author' =>ucwords($request->book_author),
            'book_publisher' => ucwords($request->book_publisher),
        ]);
        return response()->json('Book Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return response()->json("Book Deleted Successfully");
    }

    public function allGroups()
    {
        $groups = Book::all();
        return $groups;
    }
}
