<?php

namespace MercadoPagoApi\Util;

abstract class Reference {

    public static function getReferencesByRequestType($type) {
        switch($type) {
			case "credit_card":
        	break;
			case "boleto":
          	break;
			case "debit":
         	break;
            case "create_token":
                $name = "Criar e atualizar token";
                $link = "https://www.mercadopago.com.br/developers/pt/reference/oauth/_oauth_token/post";
			break;
		}

        return [$name, $link];
    }

}