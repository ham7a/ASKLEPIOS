<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicaments extends Model
{
    //
    protected $fillable = [
        'nomMedicament',
        'conditionnement',
        'PPV',
        'qty'
    ];
}
