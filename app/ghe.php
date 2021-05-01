<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ghe extends Model
{
    protected $table='ghe';
    public $timstamps=-true;

    public function phong()
    {
    	return $this->belongsTo('App\phong','id_phong','id');
    }
    public function datghe()
    {
    	return $this->hasOne('App\datghe');
    }
    public function ve()
    {
        return $this->hasOne('App\ve','id_ghe','id');
    }
}
