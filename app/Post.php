<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable=['cateogary_id','photo_id','title','body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function cateogary()
    {
        return $this->belongsTo('App\Cateogary');
    }
}


