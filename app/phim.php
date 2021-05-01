<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phim extends Model
{
    protected $table='phim';
    public $timestamps = true;
    public function lich()
    {
    	return $this->hasMany('App\lichchieu','id_phim','id');
    }
    public function cmtphim()
    {
    	return $this->hasMany('App\cmtphim','id_phim','id');
    }
}

