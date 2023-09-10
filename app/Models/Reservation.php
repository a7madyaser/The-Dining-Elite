<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'phone','message','restaurant','guest_number','res_date'];
}
