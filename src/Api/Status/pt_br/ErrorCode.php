<?php

namespace MercadoPagoApi\Api\Status\pt_br;

final class ErrorCode {

    private function __construct() {}

    CONST ERROR_TEXT = [
        2001 => "Por favor, tente novamente em alguns minutos",
        2004 => "O serviço de transação está indisponível para este meio de pagamento. Favor tentar novamente mais tarde. ",
        3013 => "O CVV é um campo obrigatório e não pode estar vazio ou nulo.",
        3000 => "Forneça o nome completo impresso no cartão utilizado na transação.",
        3015 => "O número do cartão informado é inválido",
        3016 => "O número do cartão informado é inválido",
        3018 => "A data de expiração do cartão deve estar no formato MM/AA e estar dentro da validade.",
        3019 => "A data de expiração do cartão deve estar no formato MM/AA e estar dentro da validade.",
        3020 => "Forneça o nome completo impresso no cartão utilizado na transação.",
        3021 => "Forneça o número do documento (CPF/ou CNPJ) do cartão utilizado na transação.",
        3032 => "O CVV é um campo obrigatório e não pode estar vazio, nulo ou conter um valor incorreto."
    ];

}