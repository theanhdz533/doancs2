<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    // protected $primaryKey ='id_post';
   public $timestamps = false; // display field timestamps (if = false => not display)
   protected $fillable =['id_post','image'];
}
