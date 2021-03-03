<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function GuzzleHttp\Promise\all;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

        'quantity',
        'price',



            ];


    public function user(){
        return $this->belongsTo(User::class);}
        public function owmen(){
            return $this->belongsTo(Owmen::class);


}
public function product(){
    return $this->belongsTo(Product::class);


}
static function total(){

    $allcard= Order:: all();
     $total21=0;
  foreach($allcard as $pro){
      $total21 += $pro->quantity;
  }
  return $total21;

    }
    static function total1(){

        $allcard= Order:: all();
        foreach ($allcard as  $pro) {
         $name=$pro->User->name;
        return $name;

      }


    }


}
