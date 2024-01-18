<?php

namespace MercadoPagoApi\Model;

use JsonSerializable;

class ItemModel implements JsonSerializable {

    private $id;

    private $title;

    private $description;

    private $picture_url;

    /**
     * Category ID or Name
     * **/
    private $category_id;

    private int $quantity;

    private $unit_price;

    /**
     * Product type (Eletronics, clothes etc..)
     * **/
    private $type;

    /**
     * ISO 8601 
     * **/
    private string $event_date;

    private bool $warranty;


    function __construct() {

        $numArgs = func_num_args();
        $numClassAttrs = count(get_class_vars(__CLASS__));

        if ($numArgs === $numClassAttrs) {
            
            $this->id = func_get_arg(0);
            $this->title = func_get_arg(1);
            $this->description = func_get_arg(2);
            $this->picture_url = func_get_arg(3);
            $this->category_id = func_get_arg(4);
            $this->quantity = func_get_arg(5);
            $this->unit_price = func_get_arg(6);
            $this->type = func_get_arg(7);
            $this->event_date = func_get_arg(8);
            $this->warranty = func_get_arg(9);

        }

    }

    public function jsonSerialize() {
        
        $json = [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "picture_url" => $this->picture_url,
            "category_id" => $this->category_id,
            "quantity" => $this->quantity,
            "unit_price" => $this->unit_price,
            "type" => $this->type,
            "event_date" => $this->event_date,
            "warranty" => $this->warranty,
        ];

        return $json;
    } 

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPictureUrl() {
        return $this->picture_url;
    }

    public function getCategoryId() {
        return $this->category_id;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getUnitPrice() {
        return $this->unit_price;
    }

    public function getType() {
        return $this->type;
    }

    public function getEventDate() {
        return $this->event_date;
    }

    public function getWarranty() {
        return $this->warranty;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setPictureUrl($picture_url) {
        $this->picture_url = $picture_url;
    }

    public function setCategoryId($category_id) {
        $this->category_id = $category_id;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function setUnitPrice($unit_price) {
        $this->unit_price = $unit_price;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setEventDate($event_date) {
        $this->event_date = $event_date;
    }

    public function setWarranty($warranty) {
        $this->warranty = $warranty;
    }
}