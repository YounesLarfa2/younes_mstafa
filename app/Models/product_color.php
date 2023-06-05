<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_color extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $table = "product_colors";
    protected $fillable = [
        "product_Id",
        "color"
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_Id');
    }
}
