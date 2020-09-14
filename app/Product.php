<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = ['name', 'code', 'orginal_price', 'sale_price', 'brand_name', 'color', 
    'description', 'category_name', 'category_id'];

}

