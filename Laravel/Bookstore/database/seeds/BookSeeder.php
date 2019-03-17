<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        \DB::table('books')->truncate();
        \DB::table('books')->insert(
        [
            'title' => 'Pro Laravel',
            'page_count' => 200,
            'description' => 'perfect Laravel Book',
            'price' => 100
        ]
        );
        */
        /*
        $book = new App\Book();
        $book->title = 'Pro Java';
        $book->price = 200;
        $book->description = 'Perfect';
        $book->page_count = 100;
        $book->save();
        */
        App\Book::firstOrCreate(
            ['title' => 'Pro Java'],
            [
                'title' => 'Pro Java',
                'price' => 200,
                'description' => 'Java Tutorial Book',
                'page_count' => 150
            ]
        );
    }
}
