<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'title',
        'description',
        'category_id',
        'published_at',
        'slug',
    ];


    public function category(){
        return $this->belongsTo('App\Category');
    }
}

