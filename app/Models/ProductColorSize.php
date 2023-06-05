<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    public $timestamps = false;

    protected $table='product_color_size';
    protected $fillable = [
        "product_size_id",
        "product_color_Id",
        "quantity",
        "price",
        "discount",

    ];

    public function product_color()
    {
        return $this->belongsTo(product_color::class);
    }

    public function product_size()
    {
        return $this->belongsTo(product_size::class);
    }
    


    use HasFactory;
}
