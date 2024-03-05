<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Governorates extends Model 
{

    protected $table = 'governorates';
    public $timestamps = true;
    protected $fillable = array('name');

    public function cities()
    {
        return $this->hasMany('App\Models\Cities');
    }

    public function clients()
    {
        return $this->belongsToMany('App\Models\Clients');
    }

}