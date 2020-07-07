<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $guarded = [];

    public function city(){
        $this->hasMany("\App\models\commune", "city_id", "id");
    }
}
