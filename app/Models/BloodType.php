<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{

    protected $table = 'blood_types';
    public $timestamps = true;

    public function bloodClients()
    {
        return $this->hasMany('App\Models\Clients');
    }

    public function clients()
    {
        return $this->belongsToMany('App\Models\Clients');
    }

    public function donationRequests()
    {
        return $this->hasMany('App\Models\DonationRequest');
    }

}
