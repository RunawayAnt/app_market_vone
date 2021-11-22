<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //relacion de uno a muchos polimorfica
    public function commentable(){
        return $this->morphTo();
    }

    //relacion de muchos a uno inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}

