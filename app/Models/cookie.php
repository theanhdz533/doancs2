<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cookie extends Model
{
    use HasFactory;
    protected $table = 'cookie';
    protected $primaryKey ='id';
    public $timestamps = false; // display field timestamps (if = false => not display)
    protected $fillable = ['id', 'name_cookie'];
}
