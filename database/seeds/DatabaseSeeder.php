<?php

use App\Author;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           AuthorsTableSeeder::class,
           AuthorsInfoTableSeeder::class,
           GenresTablesSeeder::class,
           ComicsTableSeeder::class,
       ]);
    }
}
