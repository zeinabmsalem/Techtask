<?php

use Illuminate\Database\Seeder;

use App\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(ProductSeeder::class);
        
    }
}
