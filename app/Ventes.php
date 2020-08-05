<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventes extends Model
{
    //
    protected $fillable = [
        'clientID',
        'total'
    ];
    public function clients()
    {
        return $this->belongsTo('App\Clients');
    }
}
