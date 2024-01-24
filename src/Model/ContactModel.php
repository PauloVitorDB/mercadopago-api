<?php

namespace MercadoPagoApi\Model;

use MercadoPagoApi\Model\PhoneModel;

class ContactModel {


    /**
    * @var \MercadoPagoApi\Model\PhoneModel $phone
    */
    private $phone;

    public function setPhone($ddi, $ddd, $number, $complete_number) {

        $this->phone = new PhoneModel(
            $ddi,
            $ddd,
            $number, 
            $complete_number
        );
    }

    public function getPhone() {
        return $this->phone;
    }

}