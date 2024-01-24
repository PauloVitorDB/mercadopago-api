<?php

namespace MercadoPagoApi\Model;

class PhoneModel {

    private $country_DDI;
    private $area_DDD;
    private $phone_number;
    private $complete_number;
    
    public function __construct($country_DDI, $area_DDD, $phone_number, $complete_number) {
        $this->country_DDI = $country_DDI;
        $this->area_DDD = $area_DDD;
        $this->phone_number = $phone_number;
        $this->complete_number = $complete_number;
    }

    /**
     * Get the value of country_DDI
     */ 
    public function getCountryDDI()
    {
        return $this->country_DDI;
    }

    /**
     * Set the value of country_DDI
     *
     * @return  self
     */ 
    public function setCountryDDI($country_DDI)
    {
        $this->country_DDI = $country_DDI;

        return $this;
    }

    /**
     * Get the value of area_DDD
     */ 
    public function getAreaDDD()
    {
        return $this->area_DDD;
    }

    /**
     * Set the value of area_DDD
     *
     * @return  self
     */ 
    public function setAreaDDD($area_DDD)
    {
        $this->area_DDD = $area_DDD;

        return $this;
    }

    /**
     * Get the value of phone_number
     */ 
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set the value of phone_number
     *
     * @return  self
     */ 
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * Get the value of complete_number
     */ 
    public function getCompleteNumber()
    {
        return $this->complete_number;
    }

    /**
     * Set the value of complete_number
     *
     * @return  self
     */ 
    public function setCompleteNumber($complete_number)
    {
        $this->complete_number = $complete_number;

        return $this;
    }
}