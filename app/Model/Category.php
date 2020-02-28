<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
Use App\Model\OrderCustom;
class Category extends Model
{
    //
    public function products(){
        return $this->hasMany(Product::class);
    }
    
    public function customs(){
        return $this->hasMany(OrderCustom::class);
    }
}
