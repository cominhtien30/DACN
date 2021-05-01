<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lichchieu extends Model
{
    protected $table='lichchieu';
    public $timestamps=true;

    public function phim()
    {
    	return $this->belongsTo('App\phim','id_phim','id');
    }
    public function rap()
    {
    	return $this->belongsTo('App\rap','id_rap','id');
    }
    public function ve()
    {
        return $this->hasMany('App\ve');
    }
    public function phong()
    {
        return $this->belongsTo('App\phong','id_phong','id');
    }
}
