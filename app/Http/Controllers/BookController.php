<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Get all books with approximate word count.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        $books = Book::all();
        $books = $this->updateWordCountForBooks($books);

        return $books;
    }

    /**
     * @param $books
     *
     * @return mixed
     */
    private function updateWordCountForBooks($books)
    {
        foreach ($books as $book) {
            $book->updateWordCount();
        }

        return $books;
    }
}