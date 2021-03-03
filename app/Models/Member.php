<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Member extends Model
{
    use HasFactory;
   //public $timestamps = false;
    protected $fillable = [
'product_id',
'user_id',


    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }

    static function total(){


        $userid= auth::id();
        $allcard= Member:: where ('user_id',$userid)->get();
       
         $total21=0;
      foreach($allcard as $pro){
          $total21 += $pro->quantity;
      }
      return $total21;

        }

}

