<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class immovable extends Model
{
    protected $guarded = [];

    public function quarter(){
        return $this->belongsTo("\App\models\quarter");
    }

    public function status(){
        return $this->belongsTo("\App\models\status");
    }

    public function category(){
        return $this->belongsTo("App\models\category");
    }

    public function bought(){
        return $this->belongsTo("\App\models\client");
    }
}
