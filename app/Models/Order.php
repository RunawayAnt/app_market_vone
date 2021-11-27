<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_ammount',
        'order_email',
        'order_status',
        'type_payment',
        'detail_payment',
        'delivery',
        'profile_id'
    ];

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }

    public function products(){
        return $this->belongsToMany('App\Model\Product');
    }
}
