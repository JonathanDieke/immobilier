<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class immovable extends Model
{
    protected $guarded = [];

    public function quarter(){
        $this->belongsTo("\App\models\quarter");
    }

    public function status(){
        $this->belongsTo("\App\models\status");
    }

    public function category(){
        $this->belongsTo("\App\models\category");
    }

    public function bought(){
        $this->belongsTo("\App\models\client");
    }
}
