<?php

namespace MercadoPagoApi\Model;

use JsonSerializable;

class ShippingModel implements JsonSerializable {

    private \MercadoPagoApi\Model\AddressModel $address;
    private $width;
    private $height;
    private bool $express_shipment;
    private bool $pick_up_on_seller;
    
    public function jsonSerialize() {

        if($this->width && $this->height) {
            $json = [
                "width" => $this->width,
                "height" => $this->height
            ];
        }

        $json["receiver_address"] = $this->address;

        if(!is_null($this->express_shipment)) {
            $json["express_shipment"] = (string)$this->express_shipment;
        }

        if(!is_null($this->pick_up_on_seller)) {
            $json["pick_up_on_seller"] = (string)$this->pick_up_on_seller;
        }

        return $json;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of express_shipment
     */ 
    public function getExpressShipment()
    {
        return $this->express_shipment;
    }

    /**
     * Set the value of express_shipment
     *
     * @return  self
     */ 
    public function setExpressShipment($express_shipment)
    {
        $this->express_shipment = $express_shipment;

        return $this;
    }

    /**
     * Get the value of pick_up_on_seller
     */ 
    public function getPickUpOnSeller()
    {
        return $this->pick_up_on_seller;
    }

    /**
     * Set the value of pick_up_on_seller
     *
     * @return  self
     */ 
    public function setPickUpOnSeller($pick_up_on_seller)
    {
        $this->pick_up_on_seller = $pick_up_on_seller;

        return $this;
    }
}