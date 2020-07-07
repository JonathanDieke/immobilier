<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $guarded = [];

    public function immovable(){
        $this->hasMany("\App\models\immovable", "category_id", "id");
    }
}
