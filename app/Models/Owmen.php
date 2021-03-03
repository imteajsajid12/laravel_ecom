<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owmen extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'price',

    ];
}
