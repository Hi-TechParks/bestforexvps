<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    //

    public function provider()
    {
    	return $this->belongsTo('App\Review', 'provider_id');
    }
}
