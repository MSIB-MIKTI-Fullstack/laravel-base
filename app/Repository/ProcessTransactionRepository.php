<?php

namespace App\Repository;

use App\Domain\Entities\TransactionProcess;
use App\Interfaces\ProcessTransactionInterface;
use App\Models\Transaction;

class ProcessTransactionRepository implements ProcessTransactionInterface
{
    public function processTransactionStatus(TransactionProcess $transaction): void
    {
        $database = Transaction::find($transaction->TransactionId()->Value());

        $database->update([
            'receipt_number' => $transaction->getReceiptNumber(), //mengupdate receipt_number
            'status' => $transaction->getValid() ? 'delivery' : 'reject' //jika valid bernilai true maka status akan menjadi delivery, jika tidak maka status akan menjadi reject
        ]);
    }
}