<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected  $guard =[];
    //一个用户 有多个文章
    public function arts(){
    	return $this->hasMany(Article::class,'user_id');
    }
}
