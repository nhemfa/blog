<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;
use App\Comment;
class Post extends Model
{
    //
    protected $table="post";
    protected $fillable=['user_id', 'title', 'content'];

    public function user(){
         return $this->belongsTo(User::class);
    }
    //one posts may have multiple comments
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    function getTitleAttribute($value){
        //mutate our post title first letter
        return ucfirst ($value);
    }

    function setTitleAttribute($value){
        //convert our title into something readable
        //convert title into lower case
        return $this->attributes['title']=strtolower($value);
    }

    function  getCreatedAtAttribute($value){
        $date_now=Carbon::now();
        return $date_now->diffForHumans($value);

    }
    function  getUpdatedAtAttribute($value){
        $date_now=Carbon::now();
        return $date_now->diffForHumans($value);

    }

}
