<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = "ms_products";
    // protected $primaryKey = "ms_products";
    protected $fillable = [
        'product_name',
        'product_price',
        'product_desc',
        'product_image',
    ];
}
