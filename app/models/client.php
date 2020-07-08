<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $guarded = [];

    public function immovable(){
        return $this->hasMany("\App\models\immovable", "client_id", "id");
    }
}
