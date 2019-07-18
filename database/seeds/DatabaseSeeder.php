<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Category::truncate();
        Product::truncate();
        factory(App\Category::class,5)->create();
        factory(App\Product::class,50)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
