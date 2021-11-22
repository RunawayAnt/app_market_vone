<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'bname','slug'
    ];

    public function product(){
        //$shop = Shop::where('user_id',$this->id)->first();

        return $this->hasOne('App\Models\Product');
    }
}
