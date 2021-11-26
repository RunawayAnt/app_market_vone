<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shopname', 'slug', 'ruc', 'description', 'logo', 'email', 'linkssocial', 'phone', 'user_id', 'section_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');//Traer los datos del usuario segun su id dentro de shop
    }

    public function section()
    {
        return $this->belongsTo('App\Models\Section');//Traer los datos del usuario segun su id dentro de shop
    }

    public function product(){
        //$shop = Shop::where('user_id',$this->id)->first();

        return $this->hasOne('App\Models\Product');
    }

    public function allProducts(){
        //$shop = Shop::where('user_id',$this->id)->first();

        return $this->hasMany('App\Models\Product');
    }


    public function comments(){
        return $this->morphMany('App\Models\Comment','commentable');
    }
}
