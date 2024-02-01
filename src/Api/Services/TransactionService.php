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
        $uuid,
        $device_id = null
    ) {

        $endpoint = '/v1/payments';

        $body = json_encode($payment);

        $headers = [
            "Content-Type: application/json",
            "Authorization: Bearer " . Authentication::$USER_TOKEN,
            "X-Idempotency-Key: " . $uuid
        ];

        if($device_id) $headers[] = "X-meli-session-id: " . $device_id ;

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::POST,
            $headers,
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

    public function getTransaction(
        $transaction_id
    ) {

        $endpoint = '/v1/payments/' . $transaction_id;

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::GET,
            [
                "Authorization: Bearer " . Authentication::$USER_TOKEN
            ],
            []
        );
      
        Response::validate($response, $http_code);

        $responseHttpRange = new ResponseHttpRange(200, 299);

        return ( new Response(
                ApiRest::POST,
                $response,
                [],
                $response,
                $req_headers,
                $url,
                $http_code,
                $responseHttpRange
            )
        );
        
    }

}