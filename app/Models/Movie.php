<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function categoryRelation()
    {
        return $this->belongsTo(CategoryController::class,'category_id','id');
   }

    // public function brand()
    // {
    //     return $this->belongsTo(Brand::class);
    // }
}
