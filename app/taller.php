<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taller extends Model
{
    //
    public function talleres()
    {
        return $this->belongsToMany('App\User', 'taller_users')->withPivot('user_id');
    }

    public function horarios()
    {
        return $this->hasMany("App\Horario");
    }


}
