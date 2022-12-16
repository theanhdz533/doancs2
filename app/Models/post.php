<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $primaryKey ='id';
   public $timestamps = false; // display field timestamps (if = false => not display)
   protected $fillable =['id','title','content','type_car','year_of_manufacture',
   'mileage','fuel','engine_size','power','color','seat_count','count','price','the_firm','image','email','status','date'];
}
