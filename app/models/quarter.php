<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class quarter extends Model
{
    protected $guarded = [];

    public function immovable(){
        $this->hasMany("\App\models\immovable", "quarter_id", "id");
    }

    public function commune(){
        $this->belongsTo("\App\models\commune");
    }
}
