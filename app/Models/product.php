<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product_image;
use App\Models\categoriers;
use App\Models\product_size;
use App\Models\product_color;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['name', 'description', 'price', 'discount_price', 'image', 'category_id'];
    public function product_images()
    {
        return $this->hasMany(product_image::class, "product_id", "id");
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product_sizes()
    {
        return $this->hasMany(product_size::class, "product_Id", "id");
    }

    public function product_colors()
    {
        return $this->hasMany(product_color::class, "product_Id", "id");
    }

    public function product_colors_sizes(){
        return $this->hasManyThrough(ProductColorSize::class,product_size::class);
    }
}
