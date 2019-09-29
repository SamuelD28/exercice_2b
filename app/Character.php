<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model used for handling the buisness logic of the personnage class.
 *
 * @author Samuel Dubé
 */
class Character extends Model
{
    public function equipments(){
        return $this->hasMany('App\Equipment');
    }
}
