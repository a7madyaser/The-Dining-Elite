<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    use HasFactory;
    protected $table = 'resturants';
    protected $fillable = ['name','description','image','id','location'];
}
