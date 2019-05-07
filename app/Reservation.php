<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $fillable = [
        'titulo', 'reserved_from', 'reserved_to',
    ];
    protected $hidden = [
        'id'
    ];
}
