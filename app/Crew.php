<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
     protected $fillable = ['name', 'crew_title', 'address', 'emergency_contact', 'phone', 'driver_license', 'social_security', 'i9_number', 'imdb_experience', 'w2_employee', 'union','resume'];
}
