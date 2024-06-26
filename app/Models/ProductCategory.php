<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
