<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'general';
    public $timestamps = true;
    protected $fillable = array('key', 'value');

}
