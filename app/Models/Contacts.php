<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{

    protected $table = 'contacts';
    public $timestamps = true;
    protected $fillable = array('subject', 'message', 'client_id');

    public function client()
    {
        return $this->belongsTo('App\Models\Clients');
    }

}
