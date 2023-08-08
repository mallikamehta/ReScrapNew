<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','address','country','city','landmark','zip','date','time','industry','weight','categories','image','message'];
}
