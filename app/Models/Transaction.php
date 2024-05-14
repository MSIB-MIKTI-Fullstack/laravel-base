<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ["created_at", "updated_at"];

    public function scopeGetTransactionByUser(Builder $query)
    {
        $query->where('user_id', Auth::user()->id);
    }
}
