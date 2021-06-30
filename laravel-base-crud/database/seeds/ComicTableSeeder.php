<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $comicsList = config("comics");
        Comic::truncate();

        foreach($comicsList as $comic) {
            $newComic = new Comic();

            $newComic->fill($comic);
            $newComic->title = $faker->title();
            $newComic->save();
        }
    }
}
