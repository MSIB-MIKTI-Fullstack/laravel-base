<?php

namespace App\Interfaces;

use App\Domain\Entities\TransactionProcess; // Add this import statement

interface ProcessTransactionInterface //fungsi interface ini adalah untuk mengikat class ProcessTransactionRepository dengan class Transaction
{
    public function processTransactionStatus(TransactionProcess $transaction): void;
    // method processTransactionStatus() di dapat dari class Transaction yang ada di folder Domain/Entities/TransactionProcess.php
}