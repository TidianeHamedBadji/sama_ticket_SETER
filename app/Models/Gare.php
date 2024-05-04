<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gare extends Model
{
    use HasFactory;
    protected $fillable = [
        'localite',
        'images',
        'nom',
        'nombres_train',
        'parking',
        'etat',
        'voie',
        'heure_ouverture',
        'heure_fermuture',
        'boutiques_id',
    ];
}
