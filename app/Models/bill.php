<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $table = 'bill';
    protected $primaryKey ='id';
    public $timestamps = false; // display field timestamps (if = false => not display)
    protected $fillable = ['id', 'username','totalmoney','date'];
}
