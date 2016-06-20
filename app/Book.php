<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Book extends Authenticatable
{
    /**
     * Calculate the word count for each book
     * @TODO make this more accurate
     *
     * @return string
     */
    public function wordCount()
    {
        $pages = $this->pages;
        $words_per_page = 300; // assume that the average book has 200-300 words per page

        return $pages * $words_per_page;
    }

    public function updateWordCount() {
        $this->words = $this->wordCount();
    }
}
