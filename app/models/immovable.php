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

    public function client(){
        return $this->belongsTo("\App\models\client");
    }

    public function getClient(){
        if($this->status_id == 2 || $this->status_id == 3)
         return $this->client->firstname .' '.$this->client->lastname;

        return 'Aucun propriétaire' ;
    }
}
