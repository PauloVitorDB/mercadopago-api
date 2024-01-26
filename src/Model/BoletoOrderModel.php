<?php 

namespace MercadoPagoApi\Model;
use JsonSerializable;

class BoletoOrderModel implements JsonSerializable {
    
    const PAYMENT_METHOD_ID = "bolbradesco";

    /**
    * @var \MercadoPagoApi\Model\AdditionalInfoModel $AdditionalInfo
    **/
    private \MercadoPagoApi\Model\AdditionalInfoModel $AdditionalInfo;

    /**
     * ISO 8601
     * **/
    private $date_of_expiration;

    private \MercadoPagoApi\Model\TransactionPayerModel $payer;

    private $transaction_amount;

    private $notification_url;

    private string $metadata;

    private $description;
    
    public function jsonSerialize() {

        $json = [
            "additional_info" => $this->AdditionalInfo,
            "description" => $this->description,
            "metadata" => $this->metadata,
            "notification_url" => $this->notification_url,
            "payer" => $this->payer,
            "payment_method_id" => self::PAYMENT_METHOD_ID,
            "transaction_amount" => $this->transaction_amount
        ];

        if($this->date_of_expiration > 3) {
            $json["date_of_expiration"] = $this->date_of_expiration;
        }

        return $json;
    }

    /**
     * Get iSO 8601
     */ 
    public function getDateOfExpiration()
    {
        return $this->date_of_expiration;
    }

    /**
     * Set iSO 8601
     *
     * @return  self
     */ 
    public function setDateOfExpiration($date_of_expiration)
    {
        $this->date_of_expiration = $date_of_expiration;

        return $this;
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
}