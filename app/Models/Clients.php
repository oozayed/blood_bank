<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Clients extends Model
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
        return $this->belongsTo('App\Models\Cities','city_id');
    }

    public function governorate(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Governorates','governorate_id');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Models\Posts');
    }

    public function bloodTypes()
    {
        return $this->belongsToMany('App\Models\BloodType');
    }

    public function governorates()
    {
        return $this->belongsToMany('App\Models\Governorates');
    }

    public function contacts()
    {
        return $this->hasMany('App\Models\Contacts');
    }

    public function notifications()
    {
        return $this->belongsToMany('App\Models\Notifications');
    }

    public function donationRequests()
    {
        return $this->hasMany('App\Models\DonationRequest');
    }

}
