<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'quantity',
        'price',
        'newprice',


            ];


    public function member(){
        return $this->belongsTo(Member::class);
    }
    public function user(){
        return $this->belongsTo(User::class);

    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}

