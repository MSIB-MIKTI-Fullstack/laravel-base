<?php

namespace App\Repository;

use App\DTO\TransactionProcessDTO;
use App\Interfaces\ProcessTransactionInterface;
use App\Models\Transaction;

class ProcessTransactionRepository implements ProcessTransactionInterface
{
    public function processTransactionStatus(TransactionProcessDTO $transaction): void
    {
        $database = Transaction::find($transaction->getTransactionId());

        $database->update([
            'receipt_number' => $transaction->getReceiptNumber(),
            'status' => $transaction->getValid() ? 'delivery' : 'reject'
        ]);
    }
}