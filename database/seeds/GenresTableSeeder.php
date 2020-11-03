<?php

use Illuminate\Database\Seeder;
use App\Genre;
use Faker\Generator as Faker;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* $genreArray = [
            "fantasy",
            'horror',
            'drama',
            'comedy',
            'action',
            'sci-fi'
        ];
        */

        /* for($i = 0; $i < 10; $i++){
            $newGenre = new Genre;
            $newGenre->name = $faker->word;
            $newGenre->save();
        } */

        $counter = 0;

        while($counter < 10){

            $word = $faker->word;

            $data = Genre::where("name", $word)->get();

            if($data->count() === 0){
                $newGenre = new Genre;
                $newGenre->name = $word;
                $newGenre->save();

                $counter++;
            }
        }

        /* $array = [];
        while(count($array) < 10){

            $fakerWord = $faker->word;
            if(!in_array($fakerWord, $array)){
                $array []= $fakerWord;
            }
        }

        foreach($array as $genre){
            $newGenre = new Genre;
            $newGenre->name = $genre;
            $newGenre->save();
        } */
    }
}
