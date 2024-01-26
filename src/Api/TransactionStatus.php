<?php

namespace MercadoPagoApi\Api;

abstract class TransactionStatus {

    const TRANSACTION_PROCESSING_STATUS = [
        "in_process"
    ];  

    const TRANSACTION_PENDING_STATUS = [
        "pending"
    ];  
    
    const TRANSACTION_PAID_ANALYSIS_STATUS = [
        "authorized"
    ];  

    const TRANSACTION_REFUNDED_STATUS = [
        "refunded",
        "charged_back",
        "in_mediation"
    ];  

    const TRANSACTION_ERROR_STATUS = [
        "cancelled",
        "rejected"
    ];

    const TRANSACTION_PAID_STATUS = [
        "approved"
    ];

    public static function isAllowedFinishTransactionStatus($transaction_status) {

        $allowed_transactions_to_finish = array_merge(
            self::TRANSACTION_PROCESSING_STATUS,
            self::TRANSACTION_PENDING_STATUS,
            self::TRANSACTION_PAID_ANALYSIS_STATUS,
            self::TRANSACTION_PAID_STATUS
        );
    
        return (in_array((str_replace(' ', '_', trim(strtoupper($transaction_status)))), $allowed_transactions_to_finish));
    }

}