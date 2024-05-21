<?php

namespace App\Domain\ValueObjects;

class TransactionId
{
    public function __construct(  //method construct ini berfungsi untuk menginisialisasi nilai dari transaction_id
        public string $transaction_id //property transaction_id ini berfungsi untuk menyimpan nilai dari transaction_id yang diinputkan
    ) {
    }

    public function Value(): string
    {
        return $this->transaction_id;
    }

    public function isEqualTo(string $transaction_id): bool //method isqualTo() ini berfungsi untuk membandingkan nilai dari transaction_id
    {
        return $this->transaction_id == $transaction_id;
    }
}