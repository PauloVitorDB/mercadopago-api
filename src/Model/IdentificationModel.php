<?php

namespace MercadoPagoApi\Model;

class IdentificationModel {

    /**
    * @var \MercadoPagoApi\Api\IdentificationType $type
    */
    private \MercadoPagoApi\Api\IdentificationType $type;

    private $number;

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function getType() {
        return $this->type;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number) {
        $this->number = preg_replace ("/[^0-9]/", '', $number);
        return $this;
    }

    public function getNumber() {
        return $this->number;
    }
    
    public function jsonSerialize()
    {

        $json = [
            "type" => $this->type,
            "number" => $this->number,
        ];

        return $json;
    }

}