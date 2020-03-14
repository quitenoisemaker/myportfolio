<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //



     use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

     protected $fillable = [
        'category_id',
        'photo_id',
        'title',
        'body'
    ];


    public function user(){

        return $this->belongsTo('App\User');
    }

     public function photo(){

        return $this->belongsTo('App\photo');
    }

     public function category(){

        return $this->belongsTo('App\category');
    }

    public function comments(){

        return $this->hasMany('App\Comment');
    }
}
