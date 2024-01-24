<?php

namespace MercadoPagoApi\Model;

class IdentificationModel {

    /**
    * @var \MercadoPagoApi\Api\IdentificationType $type
    */
    private \MercadoPagoApi\Api\IdentificationType $type;

    private $number;

    
    public function jsonSerialize()
    {

        $json = [
            "type" => $this->type,
            "number" => $this->number,
        ];

        return $json;
    }

}