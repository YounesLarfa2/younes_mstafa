<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class categoriers extends Model
{
    use HasFactory;
    protected $table = "categoriers";
    protected $fillable = [
        "name",
        "image",
    ];

    public function products()
    {
        return $this->hasMany(product::class, 'category_id', "id");
    }
}
