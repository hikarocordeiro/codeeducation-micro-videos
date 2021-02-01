<?php

use App\Models\Category;
use App\Models\Genre;
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
        factory(Category::class, 100)->create();
        factory(Genre::class, 100)->create();
    }
}
