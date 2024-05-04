<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;
    protected $fillable = [
         'lieu_depart',
         'lieu_arrive',
         'etat',
         'duree',
         'temps_mort',
        'distance'
    ];
}
