<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'features', 'sku', 'price', 'stock', 'state', 'image', 'shop_id', 'category_id', 'brand_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function comments(){
        return $this->morphMany('App\Models\Comment','commentable');
    }
}
