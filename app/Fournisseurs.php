<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseurs extends Model
{
    //
    protected $fillable = [
        'nomFournisseur',
        'adresseFournisseur',
        'telephoneFournisseur',
        'emailFournisseur'
    ];
}
