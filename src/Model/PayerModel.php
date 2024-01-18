<?php 

namespace MercadoPagoApi\Model;

class PayerModel {

    private $ip_address;
    
    private $first_name;
    
    private $last_name;

    /**
     * ISO 8601 
     * Registration date of the buyer (payer) on your site.
     * **/
    private $registration_date;

    /**
     * Indicates whether the payer has previously made a purchase on your site.
     * **/
    private bool $is_first_purchase_online;
    
    /**
     * ISO 8601 
     * Date of the last purchase made by the payer on your site.
     * **/
    private $last_purchase;

    /**
     * Indicates whether the payer has made a previous purchase on your site.
     * **/
    private bool $is_prime_user;

    /**
     * Authentication type used by the payer
     * **/
    private \MercadoPagoApi\Api\CustomerAuthenticationType $authentication_type;

    private ContactModel $contact;

    private ShippingModel $ShippingModel;

    /**
     * Get the value of contact
     */ 
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set the value of contact
     *
     * @return  self
     */ 
    public function setContact(ContactModel $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get the value of ip
     */ 
    public function getIp()
    {
        return $this->ip_address;
    }

    /**
     * Set the value of ip
     *
     * @return  self
     */ 
    public function setIp($ip)
    {
        $this->ip_address = $ip;

        return $this;
    }

    /**
     * Get the value of first_name
     */ 
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get iSO 8601
     */ 
    public function getRegistrationDate()
    {
        return $this->registration_date;
    }

    /**
     * Set iSO 8601
     *
     * @return  self
     */ 
    public function setRegistrationDate($registration_date)
    {
        $this->registration_date = $registration_date;

        return $this;
    }

    /**
     * Get indicates whether the payer has previously made a purchase on your site.
     */ 
    public function getIsFirstPurchaseOnline()
    {
        return $this->is_first_purchase_online;
    }

    /**
     * Set indicates whether the payer has previously made a purchase on your site.
     *
     * @return  self
     */ 
    public function setIsFirstPurchaseOnline($is_first_purchase_online)
    {
        $this->is_first_purchase_online = $is_first_purchase_online;

        return $this;
    }

    /**
     * Get iSO 8601
     */ 
    public function getLastPurchase()
    {
        return $this->last_purchase;
    }

    /**
     * Set iSO 8601
     *
     * @return  self
     */ 
    public function setLastPurchase($last_purchase)
    {
        $this->last_purchase = $last_purchase;

        return $this;
    }

    /**
     * Get indicates whether the payer has made a previous purchase on your site.
     */ 
    public function getIsPrimeUser()
    {
        return $this->is_prime_user;
    }

    /**
     * Set indicates whether the payer has made a previous purchase on your site.
     *
     * @return  self
     */ 
    public function setIsPrimeUser($is_prime_user)
    {
        $this->is_prime_user = $is_prime_user;

        return $this;
    }

    /**
     * Get authentication type used by the payer
     */ 
    public function getAuthenticationType()
    {
        return $this->authentication_type;
    }

    /**
     * Set authentication type used by the payer
     *
     * @return  self
     */ 
    public function setAuthenticationType($authentication_type)
    {
        $this->authentication_type = $authentication_type;

        return $this;
    }

    /**
     * Get the value of ShippingModel
     */ 
    public function getShippingModel()
    {
        return $this->ShippingModel;
    }

    /**
     * Set the value of ShippingModel
     *
     * @return  self
     */ 
    public function setShippingModel($ShippingModel)
    {
        $this->ShippingModel = $ShippingModel;

        return $this;
    }
} 