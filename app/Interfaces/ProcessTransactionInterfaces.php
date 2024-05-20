<?php

namespace App\Interfaces;

use App\DTO\TransactionProcessDTO;

interface ProcessTransactionInterface
{
    public function processTransactionStatus(TransactionProcessDTO $transaction): void;
}
