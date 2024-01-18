<?php

namespace MercadoPagoApi\Model;

use JsonSerializable;

class AddressModel implements JsonSerializable {

    private $state_name;
    private $city_name;
    private $street_name;
    private int $street_number;
    private $floor;
    private $apartment;
    private $zip_code;

    public function __construct() {

        $numArgs = func_num_args();
        $numClassAttrs = count(get_class_vars(__CLASS__));

        if ($numArgs === $numClassAttrs) {
            
            $this->state_name = func_get_arg(0);
            $this->city_name = func_get_arg(1);
            $this->street_name = func_get_arg(2);
            $this->street_number = func_get_arg(3);
            $this->floor = func_get_arg(4);
            $this->apartment = func_get_arg(5);
            $this->zip_code = func_get_arg(6);

        }

    }

    public function getStateName() {
        return $this->state_name;
    }

    public function getCityName() {
        return $this->city_name;
    }

    public function getStreetName() {
        return $this->street_name;
    }

    public function getStreetNumber() {
        return $this->street_number;
    }

    public function getFloor() {
        return $this->floor;
    }

    public function getApartment() {
        return $this->apartment;
    }

    public function getZipCode() {
        return $this->zip_code;
    }

    public function setStateName($state_name) {
        $this->state_name = $state_name;
    }

    public function setCityName($city_name) {
        $this->city_name = $city_name;
    }

    public function setStreetName($street_name) {
        $this->street_name = $street_name;
    }

    public function setStreetNumber($street_number) {
        $this->street_number = $street_number;
    }

    public function setFloor($floor) {
        $this->floor = $floor;
    }

    public function setApartment($apartment) {
        $this->apartment = $apartment;
    }

    public function setZipCode($zip_code) {
        $this->zip_code = $zip_code;
    }

    public function jsonSerialize() {

        $json = [
            "state_name" => $this->state_name,
            "city_name" => $this->city_name,
            "street_name" => $this->street_name,
            "street_number" => $this->street_number,
         #   "floor" => $this->floor,
         #  "apartment" => $this->apartment,
            "zip_code" => $this->zip_code
          ];

        return $json; 
    }
    
}