<?php

namespace MercadoPagoApi\Model;

class AdditionalInfoModel {

    
    private $ip_address;
    
    /**
    * @var \MercadoPagoApi\Model\ShippingModel[] $ShippingModel
    **/
    private ShippingModel $ShippingModel;

    /**
    * @var \MercadoPagoApi\Model\ItemModel[] $items
    **/
    private $items = [];

    /**
    * @var \MercadoPagoApi\Model\PayerModel $payer
    **/
    private \MercadoPagoApi\Model\PayerModel $payer;

    public function jsonSerialize()
    {
        $json["ip_address"] = $this->ip_address;
        $json["items"] = $this->items;
        $json["payer"] = $this->payer;
        $json["shipments"] = $this->ShippingModel;

        return $json;
    }

    /**
     * Get the value of items
     * @return \MercadoPagoApi\Model\ItemModel[]
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     * @param \MercadoPagoApi\Model\ItemModel $item
     * @return  self
     */ 
    public function addItem(ItemModel $item)
    {
        array_push($this->items, $item);

        return $this;
    }

    /**
     * Get the value of ip
     */ 
    public function getIp()
    {
        return $this->ip_address;
    }

    /**
     * Set the value of ip
     *
     * @return  self
     */ 
    public function setIp($ip)
    {
        $this->ip_address = $ip;

        return $this;
    }

    /**
     * Get the value of ShippingModel
     */ 
    public function getShippingModel()
    {
        return $this->ShippingModel;
    }

    /**
     * Set the value of ShippingModel
     *
     * @return  self
     */ 
    public function setShippingModel($ShippingModel)
    {
        $this->ShippingModel = $ShippingModel;

        return $this;
    }

    /**
     * Get $payer
     *
     * @return  \MercadoPagoApi\Model\PayerModel
     */ 
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Set $payer
     *
     * @param  \MercadoPagoApi\Model\PayerModel  $payer  $payer
     *
     * @return  self
     */ 
    public function setPayer(\MercadoPagoApi\Model\PayerModel $payer)
    {
        $this->payer = $payer;

        return $this;
    }
} 