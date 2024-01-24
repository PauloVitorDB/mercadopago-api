<?php

namespace MercadoPagoApi\Api;

abstract class CustomerAuthenticationType {

    const GOOGLE = "Gmail";
    const FACEBOOK = "Facebook";
    const STORE = "Native web";
    const OTHER = "Other";

}