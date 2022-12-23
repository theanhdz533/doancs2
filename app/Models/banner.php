<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;
    protected $table = 'banner';
    protected $primaryKey ='id';
    public $timestamps = false; // display field timestamps (if = false => not display)
    protected $fillable = ['img'];
}
