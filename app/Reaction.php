<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    // インクリメントIDを無効化
    public $incrementing = false;
    // update_at, created_at を無効化
    public $timestamps = false;
    
    //Relation
    public function toUserId()
    {
        return $this->belongsTo('App\User', 'to_user_id', 'id');
    }
    
    public function fromUserId()
    {
        return $this->belongsTo('App\User', 'from_user_id', 'id');
    }
}
