<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $fillable=['p_name','player_position','player_number','status','t_code'];
}
