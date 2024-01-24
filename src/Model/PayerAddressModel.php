<?php

namespace MercadoPagoApi\Model;

use JsonSerializable;

class PayerAddressModel implements JsonSerializable {

    private $street_name;
    private int $street_number;
    private $zip_code;

    public function __construct() {

        $numArgs = func_num_args();
        $numClassAttrs = count(get_class_vars(__CLASS__));

        if ($numArgs === $numClassAttrs) {
            
            $this->street_name = func_get_arg(0);
            $this->street_number = func_get_arg(1);
            $this->zip_code = func_get_arg(2);

        }

    }

    public function getStreetName() {
        return $this->street_name;
    }

    public function getStreetNumber() {
        return $this->street_number;
    }

    public function getZipCode() {
        return $this->zip_code;
    }

    public function setStreetName($street_name) {
        $this->street_name = $street_name;
    }

    public function setStreetNumber($street_number) {
        $this->street_number = $street_number;
    }

    public function setZipCode($zip_code) {
        $this->zip_code = $zip_code;
    }

    public function jsonSerialize() {

        $json = [
            "street_name" => $this->street_name,
            "street_number" => $this->street_number,
            "zip_code" => $this->zip_code
          ];

        return $json; 
    }
    
}