<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "image",
        "product_colors_size_id",
        "quantity",
        "total",
    ];

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function product()
    {
        return $this->hasOneThrough(Product::class,ProductColorSize::class);
    }
    public function product_color_size(){
        return $this->belongsTo(ProductColorSize::class);
    }
}
