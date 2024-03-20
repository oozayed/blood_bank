<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = array('title', 'image', 'content', 'category_id');

    public function clients()
    {
        return $this->belongsToMany('App\Models\Client');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function scopeSearch($query, $request)
    {
        return $query
            ->when($request->has('category_id'), function ($q) use ($request) {
                return $q->where('category_id', $request->category_id);
            })
            ->when($request->has('search'), function ($q) use ($request) {
                return $q->where('title', 'like', '%' . $request->search . '%');
            });
    }

}
