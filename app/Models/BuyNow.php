<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyNow extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "buy_nows";

    public function user(){
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
