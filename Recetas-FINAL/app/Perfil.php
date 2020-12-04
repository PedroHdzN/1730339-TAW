<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    //Relaciónde 1:1 del Perfil con el usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
