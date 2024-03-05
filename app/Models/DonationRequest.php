<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model
{

    protected $table = 'donation_requests';
    public $timestamps = true;
    protected $fillable = array('patient_name', 'patient_phone', 'hospital_name', 'blood_type_id', 'patient_age', 'bags_num', 'hospital_address', 'details', 'latitude', 'longitude', 'client_id', 'city_id', 'governorate_id');

    public function notifications()
    {
        return $this->hasMany('App\Models\Notifications');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Clients');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\Cities');
    }

    public function bloodType()
    {
        return $this->belongsTo('App\Models\BloodType');
    }

    // This scope is to make searching in better way
    public function scopeFilter($query, $request)
    {
        return $query
            ->when($request->has('blood_type_id'), function ($q) use ($request) {
                return $q->where('blood_type_id', $request->blood_type_id);
            })
            ->when($request->has('governorate_id'), function ($q) use ($request) {
                return $q->where('governorate_id', $request->governorate_id);
            });
    }
}
