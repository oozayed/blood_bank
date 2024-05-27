<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Client extends Authenticatable
{
    use HasApiTokens;

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'phone', 'password', 'd_o_b', 'blood_type_id', 'last_donation_date', 'city_id', 'pin_code','governorate_id');
    protected $hidden = [
        'password',
    ];

    public function bloodType()
    {
        return $this->belongsTo('App\Models\BloodType','blood_type_id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City','city_id');
    }

    public function governorate(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Governorate','governorate_id');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }

    public function bloodTypes()
    {
        return $this->belongsToMany('App\Models\BloodType','blood_type_client', 'client_id', 'blood_type_id');
    }

    public function governorates()
    {
        return $this->belongsToMany('App\Models\Governorate', 'client_governorate', 'client_id', 'governorate_id');
    }

    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }

    public function notifications()
    {
        return $this->belongsToMany('App\Models\Notification');
    }

    public function donationRequests()
    {
        return $this->hasMany('App\Models\DonationRequest');
    }

}
