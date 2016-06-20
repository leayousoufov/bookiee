<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createBooks();
    }

    private function createBooks()
    {
        $books =
            [
                [
                    'title'        => 'Long Lost Siblings: A Memoir',
                    'author'       => 'Priness Leia',
                    'pages'        => '400',
                    'published_at' => Carbon::now()
                ],
                [
                    'title'        => 'Honey, I Lost the Kids',
                    'author'       => 'Darth "Annie" Vader',
                    'pages'        => '610',
                    'published_at' => Carbon::now()
                ],
                [
                    'title'        => 'I Shot First, I Swear',
                    'author'       => 'Han Solo',
                    'pages'        => '342',
                    'published_at' => Carbon::now()
                ],
                [
                    'title'        => 'Size Matters Not',
                    'author'       => 'Master Yoda',
                    'pages'        => '543',
                    'published_at' => Carbon::now()
                ],
                [
                    'title'        => 'It\'s a Trap and Other Short Stories',
                    'author'       => 'A.A.',
                    'pages'        => '920',
                    'published_at' => Carbon::now()
                ],
            ];

        return \Illuminate\Support\Facades\DB::table('books')->insert($books);
    }
}
