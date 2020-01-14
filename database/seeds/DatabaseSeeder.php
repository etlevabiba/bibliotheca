<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $numberOfCreatedAuthors = 10;
        $authors = [];
        for ($i = 0; $i < $numberOfCreatedAuthors; $i++) {
            $authors[] = factory(Author::class)->create();
        }

        factory(Book::class, 2)->create(['author_id' => $authors[0]->id]);
        factory(Book::class, 4)->create(['author_id' => $authors[1]->id]);
        factory(Book::class, 1)->create(['author_id' => $authors[2]->id]);
        factory(Book::class, 3)->create(['author_id' => $authors[3]->id]);
        factory(Book::class, 4)->create(['author_id' => $authors[4]->id]);
        factory(Book::class, 5)->create(['author_id' => $authors[5]->id]);
        factory(Book::class, 1)->create(['author_id' => $authors[6]->id]);
        factory(Book::class, 3)->create(['author_id' => $authors[7]->id]);
        factory(Book::class, 3)->create(['author_id' => $authors[8]->id]);
        factory(Book::class, 4)->create(['author_id' => $authors[9]->id]);
    }
}
