<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ve extends Model
{
    protected $table="ve";
    public $timestamps=false;

    public function lichchieu()
    {
    	return $this->belongsTo('App\lichchieu','id_lichchieu','id');
    }
    public function ghe(){
    	return $this->belongsTo('App\ghe','id_ghe','id');
    }
    public function user()
    {
    	return $this->belongsTo('App\User','id_user','id');
    }
    public function vephim()
    {
        return $this->hasManyThrough('App\phim', 'App\lichchieu','id_phim','id_lichchieu','id');
    }
}
