<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $guarded = [];

    public function buy(){
        $this->hasMany("\App\models\immovable","immovable_id", "id");
    }
}
