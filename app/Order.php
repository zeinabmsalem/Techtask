<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   
    protected $fillable = ['user_id', 'email', 'customer_name', 'address', 'phone', 'card_name', 'card_date']; 
}
