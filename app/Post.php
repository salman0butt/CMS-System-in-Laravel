<?php

namespace App;

//use Cviebrock\EloquentSluggable\Sluggable;
//use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $id)
 */
class Post extends Model
{
    //
//    use Sluggable;
//    use SluggableScopeHelpers;
//
//
//    public function sluggable() {
//        return [
//            'slug' => [
//                'source' => 'title'
//            ]
//        ];
//    }
//

    protected $fillable = [
        'title',
        'category_id',
        'photo_id',
        'body',
        'slug',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function comments(){
        return $this->hasMany('\App\Comment');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
