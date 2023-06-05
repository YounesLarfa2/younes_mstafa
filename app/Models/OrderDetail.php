<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $table = 'order_details';
    protected $fillable = [
        "order_id",
        "product_colors_size_id ",
        "quantity",
        "price"
    ];

    public function product_colors_size(){
        return $this->belongsTo(ProductColorSize::class);
    }
}
