<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriers extends Model
{
    use HasFactory;
    protected $table = "categoriers";
    protected $fillable = [
        "name",
        "image",
    ];
}
