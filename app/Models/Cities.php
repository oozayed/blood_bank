<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model 
{

    protected $table = 'cities';
    public $timestamps = true;
    protected $fillable = array('name');

    public function donationRequests()
    {
        return $this->hasMany('App\Models\DonationRequest');
    }

    public function governorate()
    {
        return $this->belongsTo('App\Models\Governorates');
    }

    public function clients()
    {
        return $this->hasMany('App\Models\Clients');
    }

}