<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linscription extends Model
{

    protected $table = 'linscription';

    protected $primaryKey = 'idlinscription';


    protected $guarded = [];


    public function utilisateur()
    {

        return $this->hasOne(Utilisateur::class);
    }



}
