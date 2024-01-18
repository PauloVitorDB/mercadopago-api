<?php

namespace MercadoPagoApi\Api;

use MercadoPagoApi\Util\ApiRest;
use MercadoPagoApi\Util\RequestInterface;

abstract class BaseServiceRequest {

    protected RequestInterface $request;

    public function __construct($BASE_URL) {
        $this->request = new ApiRest($BASE_URL);
    }

}