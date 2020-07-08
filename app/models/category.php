<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $guarded = [];

    public function immovable(){
        return $this->hasMany("\App\models\immovable");
    }
}
