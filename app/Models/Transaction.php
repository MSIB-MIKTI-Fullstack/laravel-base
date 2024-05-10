<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    protected $guarded = ["created_at", "updated_at"];
    public function scopeGetTransactionByUser(Builder $query)
    {
        $query->leftJoin('detail_transactions', 'transactions.id', '=', 'detail_transactions.transaction_id')
            ->where('transactions.user_id', Auth::user()->id);
    }
}
