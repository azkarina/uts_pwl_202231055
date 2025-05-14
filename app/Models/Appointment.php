<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
    'name',
    'email',
    'phone',
    'date',
    'message',
    'departement',
    'status',
    'user_id',
];

}
