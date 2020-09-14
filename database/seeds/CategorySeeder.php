<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// $category = factory(App\Category::class, 5)->create()->each(function ($Category) {
	    //     $Category->posts()->save(factory(App\Post::class)->make());
	    // });

        $this->call(CategorySeeder::class);

    }
}
