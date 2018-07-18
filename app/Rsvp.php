<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'rsvp', 'comments'];
}
