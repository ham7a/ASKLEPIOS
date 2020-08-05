<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    //
    protected $fillable = [
        'nomClient',
        'adresseClient',
        'telephoneClient',
        'emailClient'
    ];
    public function ventes()
    {
        return $this->hasMany('App\Ventes');
    }
}
