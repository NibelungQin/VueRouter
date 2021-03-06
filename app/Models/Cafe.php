<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    protected $table = 'cafes';
    protected $fillable = ['name','address','city','state','zip'];
}
