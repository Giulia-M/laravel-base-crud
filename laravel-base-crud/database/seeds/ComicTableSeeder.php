<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsList = config("comics");

        foreach($comicsList as $comic) {
            $newComic = new Comic();

            $newComic->fill($comic);
            $newComic->save();
        }
    }
}
