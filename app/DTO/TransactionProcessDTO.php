<?php

namespace App\DTO;

class TransactionProcessDTO {
  
    public function __construct(
        public string $transaction_id,
        public string $receipt_number,
        public bool $valid
    ) {
    }

    public function setTransactionId(string $transaction_id) :void{
        $this->transaction_id = $transaction_id;
    }

    public function getTransactionId() :int {
        return $this->transaction_id;
    }

    public function setReceiptNumber(string $receipt_number) :void {
        $this->receipt_number = $receipt_number;
    }

    public function getReceiptNumber() : string {
        return $this->receipt_number;
    }

    public function setValid(bool $valid) : void {
        $this->valid = $valid;
    }

    public function getValid() :bool {
        return $this->valid;
    }
}
