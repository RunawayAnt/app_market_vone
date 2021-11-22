<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'cname','slug'
    ];

    public function product(){
        //$shop = Shop::where('user_id',$this->id)->first();

        return $this->hasOne('App\Models\Product');
    }
}
