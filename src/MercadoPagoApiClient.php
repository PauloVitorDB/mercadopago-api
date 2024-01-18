<?php

namespace MercadoPagoApi;

use MercadoPagoApi\Api\Authentication;
use MercadoPagoApi\Api\Environment;

class MercadoPagoApiClient {

    public function __construct(
        $user_token = "",
        $redirect_uri = null
    ) {
        Authentication::$USER_TOKEN = $user_token;
        Environment::defineEnvironment();
        if(!is_null($redirect_uri) > 0) Environment::$APPLICATION_REDIRECT_URI = $redirect_uri;
    }


    public function getTransactionService() {
        return \MercadoPagoApi\Api\Services\TransactionService::getInstance();
    }

    public function getTokenService() {
        return \MercadoPagoApi\Api\Services\TokenService::getInstance();
    }


}