<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Order extends Model
{
    protected $table = 'orders';
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
