<?php

namespace App\Domain\Entities;

use App\Domain\ValueObjects\TransactionId;

class TransactionProcess
{
    public function __construct(
        public TransactionId $transaction_id,
        public string $receipt_number,
        public bool $valid
    ) {
    }

    public function TransactionId(): TransactionId
    {
        return $this->transaction_id;
    }
}