<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $guarded = [];

    public function immovable(){
        $this->hasMany("App\models\immovable", "status_id", "id");
    }
}
