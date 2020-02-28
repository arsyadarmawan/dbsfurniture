<?php

namespace App\Model;
use App\Model\Category;
use Illuminate\Database\Eloquent\Model;

class OrderCustom extends Model
{
    //
    protected $table = 'ordercustoms';
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
