<?php

namespace MercadoPagoApi\Util;

interface RequestInterface {

    public function defaultRequest($endpoint = '', $method_type,  $headers = [], $postfields = [], $parse_response = true);

}