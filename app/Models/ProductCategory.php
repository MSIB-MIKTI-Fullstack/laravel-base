<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function product()
    {
=======
    public function product(){
>>>>>>> origin/rafa
        return $this->hasMany(Product::class);
    }
}
