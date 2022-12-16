<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $primaryKey ='id';
    public $timestamps = false; // display field timestamps (if = false => not display)
    protected $fillable = ['id', 'product_id','user','amount'];
}
