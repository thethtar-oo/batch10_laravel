<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'title', 'body','image','status','category-id','user_id',
    ];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
     public function reviews()
    {
        return $this->hasMany('App\Review');
    }


}
