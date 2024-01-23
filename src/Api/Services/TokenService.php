<?php

namespace MercadoPagoApi\Api\Services;

use MercadoPagoApi\Api\BaseServiceRequest;
use MercadoPagoApi\Util\ApiRest;
use MercadoPagoApi\Util\ResponseHttpRange;
use MercadoPagoApi\Util\Response;
use MercadoPagoApi\Api\Environment;

class TokenService extends BaseServiceRequest {

    private static $instance;

    private $client_id;

    private $client_secret;
    
    private function __construct() {
        parent::__construct(Environment::$BASE_URL);
    }

    public static function getInstance() {

        if(is_null(self::$instance)) self::$instance = new self; 

        return self::$instance;
    }

    private function getHeaders() {
        return [
            "Content-Type: application/json",
            "accept: application/json"
        ];
    }

    public function createToken($code) {

        $endpoint = '/oauth/token';

        $body = json_encode([
            "grant_type" => "authorization_code",
            "code" => $code,
            "client_secret" => $this->client_secret,
            "client_id" => $this->client_id,
            "redirect_uri" => Environment::$APPLICATION_REDIRECT_URI
        ]);

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::POST,
            $this->getHeaders(),
            $body
        );
      
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

    public function refreshToken($refresh_token) {

        $endpoint = '/oauth/token';

        $body = json_encode([
            "grant_type" => "refresh_token",
            "refresh_token" => $refresh_token
        ]);

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::POST,
            $this->getHeaders(),
            $body
        );
      
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

    /**
     * Get the value of client_id
     */ 
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set the value of client_id
     *
     * @return  self
     */ 
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }

    /**
     * Get the value of client_secret
     */ 
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * Set the value of client_secret
     *
     * @return  self
     */ 
    public function setClientSecret($client_secret)
    {
        $this->client_secret = $client_secret;

        return $this;
    }
}