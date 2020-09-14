<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    
    protected $fillable = ['flag', 'user_id', 'name', 'code', 'orginal_price', 'sale_price', 'brand_name', 
    'color', 'description', 'category_name', 'order_id'];
}
