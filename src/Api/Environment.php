<?php

namespace MercadoPagoApi\Api;

abstract class Environment {

    private static $BASE_URL_PRODUCTION = "https://api.mercadopago.com/";    

    public static $BASE_URL;

    public static $APPLICATION_REDIRECT_URI = '';

    const AUTHORIZATION_URL = "https://auth.mercadopago.com/authorization";

    public static function production () {
        self::$BASE_URL = self::$BASE_URL_PRODUCTION;
    }

    public static function defineEnvironment() {
            self::production();
    }
    
}