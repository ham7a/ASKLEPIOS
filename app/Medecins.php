<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecins extends Model
{
    //
    protected $fillable = [
        'nomMedecin',
        'specialiteMedecin',
        'adresseMedecin',
        'telephoneMedecin',
        'emailMedecin'
    ];
}
