<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //

    public function packages()
    {
    	return $this->hasMany('App\Pricing', 'provider_id', 'id');
    }

    public function features()
    {
    	return $this->hasMany('App\Features', 'provider_id', 'id');
    }
}
