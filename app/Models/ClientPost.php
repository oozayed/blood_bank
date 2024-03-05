<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientPost extends Model
{

    protected $table = 'client_post';
    public $timestamps = true;
    protected $fillable = [
        'client_id', 'post_id'
    ];


    public function post()
    {
        return $this->belongsTo('App\Models\Posts');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Clients');
    }
}
