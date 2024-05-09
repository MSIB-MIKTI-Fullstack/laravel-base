<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function product_category()
    {
=======
    protected $table = 'products';

    public function product_category(){
>>>>>>> origin/rafa
        return $this->belongsTo(ProductCategory::class);
    }
}
