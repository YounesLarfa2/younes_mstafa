<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_size extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $table = "product_sizes";
    protected $fillable = [
        "product_Id",
        "size",
    ];
    
}
