<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Category;
use App\Model\Order;
class Product extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
