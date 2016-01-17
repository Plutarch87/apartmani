<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table 	= 'reservations';
    protected $fillable = ['from_date', 'to_date'];
}
