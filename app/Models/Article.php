<?php

namespace App\Models;



class Article extends Base
{
    //多个文章对应一个用户
    public function user(){
    	return $this->belongsTo(User::class,'user_id');
    }
}
