<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userlist extends Model
{
    //
	
	protected $hidden = [
        'password',
    ];
}
