<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'sname'
    ];

    public function shop(){
        //$shop = Shop::where('user_id',$this->id)->first();

        return $this->hasOne('App\Models\Shop');
    }
}
