<?php

namespace MercadoPagoApi\Api\Status\pt_br;

final class StatusDetail {

    private function __construct() {}

    CONST STATUS_DETAIL_TEXT = [
        "accredited" => "Pagamento aprovado",
        "pending_contingency" => "Pagamento está sendo processado",
        "pending_review_manual" => "O pagamento está sendo analisado",
        "cc_rejected_bad_filled_date" => "Pagamento negado. Data de expiração incorreta.",
        "cc_rejected_bad_filled_other" => "Pagamento negado. Informações incorretas de cartão.",
        "cc_rejected_bad_filled_security_code" => "Pagamento negado. Códio de segurança do cartão(CVV) incorreto.",
        "cc_rejected_blacklist" => "Pagamento negado. Não foi possível concluir o pagamento, o pagamento com o cartão utilizado foi negado pelo Antifraude.",
        "cc_rejected_call_for_authorize" => "Pagamento negado. O meio de pagamento requer autorização prévia do valor da operação.",
        "cc_rejected_card_disabled" => "Pagamento negado. O cartão não está ativo.",
        "cc_rejected_duplicated_payment" => "Já existe uma transação em andamento.",
        "cc_rejected_high_risk" => "Não foi possível concluir o pagamento, o pagamento foi negado (Antifraude).",
        "cc_rejected_insufficient_amount" => "Não foi possível concluir o pagamento com o meio de pagamento selecionado.",
        "cc_rejected_invalid_installments" => "Quantidade de parcelas é inválida.",
        "cc_rejected_max_attempts" => "Número de tentativas excedia, tente novamente mais tarde.",
        "cc_rejected_other_reason" => "Não foi possível concluir o pagamento, o pagamento foi negado."
    ];

}