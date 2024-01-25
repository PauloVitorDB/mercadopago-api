<?php

namespace MercadoPagoApi\Api\Services;

use MercadoPagoApi\Api\BaseServiceRequest;
use MercadoPagoApi\Api\Environment;
use MercadoPagoApi\Util\ApiRest;
use MercadoPagoApi\Util\ResponseHttpRange;
use MercadoPagoApi\Util\Response;
use MercadoPagoApi\Api\Authentication;

class TransactionService extends BaseServiceRequest {

    private static $instance;

    private function __construct() {
        parent::__construct(Environment::$BASE_URL);
    }

    public static function getInstance() {

        if(is_null(self::$instance)) self::$instance = new self; 

        return self::$instance;
    }

    public function createTransaction(
        $payment,
        $uuid
    ) {

        $endpoint = '/v1/payments';

        $body = json_encode($payment);

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::POST,
            [
                "Content-Type: application/json",
                "Authorization: Bearer " . Authentication::$USER_TOKEN,
                "X-Idempotency-Key" => $uuid
            ],
            $body
        );
      
        Response::validate($response, $http_code);

        $responseHttpRange = new ResponseHttpRange(200, 299);

        return ( new Response(
                ApiRest::POST,
                $response,
                $body,
                $response,
                $req_headers,
                $url,
                $http_code,
                $responseHttpRange
            )
        );
        
    }

}