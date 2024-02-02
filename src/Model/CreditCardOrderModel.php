<?php 

namespace MercadoPagoApi\Model;
use JsonSerializable;

class CreditCardOrderModel implements JsonSerializable {
    
    const PAYMENT_METHOD_ID = "credit_card";

    private $token;
    private $description;
    private $statement_descriptor;
    private $installments;
    private $payment_method_id;
    private $issuer_id;

    /**
    * @var \MercadoPagoApi\Model\AdditionalInfoModel $AdditionalInfo
    **/
    private \MercadoPagoApi\Model\AdditionalInfoModel $AdditionalInfo;


    private \MercadoPagoApi\Model\TransactionPayerModel $payer;

    private $transaction_amount;

    private $notification_url;

    private string $metadata;
    
    public function jsonSerialize() {

        $json = [
            "additional_info" => $this->AdditionalInfo,
            "description" => $this->description,
            "statement_descriptor" => $this->statement_descriptor,
            "notification_url" => $this->notification_url,
            "payer" => $this->payer,
            "payment_method_id" => $this->payment_method_id,
            "transaction_amount" => $this->transaction_amount,
            "issuer_id" => $this->issuer_id,
            "installments" => $this->installments,
            "token" => $this->token,
        ];

        if(isset($this->metadata) && $this->metadata) $json["metadata"] = $this->metadata;

        return $json;
    }

    /**
     * Get the value of AdditionalInfo
     */ 
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }

    /**
     * Set the value of AdditionalInfo
     *
     * @return  self
     */ 
    public function setAdditionalInfo($AdditionalInfo)
    {
        $this->AdditionalInfo = $AdditionalInfo;

        return $this;
    }

    /**
     * Get the value of payer
     */ 
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Set the value of payer
     *
     * @return  self
     */ 
    public function setPayer($payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get the value of transaction_amount
     */ 
    public function getTransactionAmount()
    {
        return $this->transaction_amount;
    }

    /**
     * Set the value of transaction_amount
     *
     * @return  self
     */ 
    public function setTransactionAmount($transaction_amount)
    {
        $this->transaction_amount = $transaction_amount;

        return $this;
    }

    /**
     * Get the value of notification_url
     */ 
    public function getNotificationUrl()
    {
        return $this->notification_url;
    }

    /**
     * Set the value of notification_url
     *
     * @return  self
     */ 
    public function setNotificationUrl($notification_url)
    {
        $this->notification_url = $notification_url;

        return $this;
    }

    /**
     * Get the value of metadata
     */ 
    public function getMetadata()
    {
        $metadata = (is_array($this->metadata) || is_object($this->metadata) ? json_decode($this->metadata, true) : $this->metadata);
        return $metadata;
    }

    /**
     * Set the value of metadata
     *
     * @return  self
     */ 
    public function setMetadata($metadata)
    {
        $this->metadata = (is_array($metadata) || is_object($metadata) ? json_encode($metadata, JSON_UNESCAPED_UNICODE) : $metadata);

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of token
     */ 
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of token
     *
     * @return  self
     */ 
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get the value of installments
     */ 
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * Set the value of installments
     *
     * @return  self
     */ 
    public function setInstallments($installments)
    {
        $this->installments = $installments;

        return $this;
    }

    /**
     * Get the value of payment_method_id
     */ 
    public function getPaymentMethodId()
    {
        return $this->payment_method_id;
    }

    /**
     * Set the value of payment_method_id
     *
     * @return  self
     */ 
    public function setPaymentMethodId($payment_method_id)
    {
        $this->payment_method_id = $payment_method_id;

        return $this;
    }

    /**
     * Get the value of issuer_id
     */ 
    public function getIssuerId()
    {
        return $this->issuer_id;
    }

    /**
     * Set the value of issuer_id
     *
     * @return  self
     */ 
    public function setIssuerId($issuer_id)
    {
        $this->issuer_id = $issuer_id;

        return $this;
    }

    /**
     * Get the value of statement_descriptor
     */ 
    public function getStatementDescriptor()
    {
        return $this->statement_descriptor;
    }

    /**
     * Set the value of statement_descriptor
     *
     * @return  self
     */ 
    public function setStatementDescriptor($statement_descriptor)
    {
        $this->statement_descriptor = $statement_descriptor;

        return $this;
    }
}