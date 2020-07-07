<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class commune extends Model
{
    protected $guarded = [];

    public function quarter(){
        $this->hasMany("\app\models\quarter", "commune_id", "id");
    }

    public function city(){
        $this->belongsTo("\App\models\city");
    }
}
