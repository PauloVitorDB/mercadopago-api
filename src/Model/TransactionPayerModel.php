<?php 

namespace MercadoPagoApi\Model;

class TransactionPayerModel {
    
    private $type;

    private $entity_type;

    private $id;

    private $email;

    private \MercadoPagoApi\Model\IdentificationModel $identification;

    private $first_name;
    
    private $last_name;


    public function jsonSerialize()
    {
        $json["first_name"] = $this->first_name;
        $json["last_name"] = $this->last_name;
        $json["identification"] = $this->identification;
        $json["email"] = $this->email;
        $json["id"] = $this->id;
        $json["type"] = $this->type;
        $json["entity_type"] = $this->entity_type;
        $json["email"] = $this->email;

        return $json;
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
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of entity_type
     */ 
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * Set the value of entity_type
     *
     * @return  self
     */ 
    public function setEntityType($entity_type)
    {
        $this->entity_type = $entity_type;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of identification
     */ 
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Set the value of identification
     *
     * @return  self
     */ 
    public function setIdentification($identification)
    {
        $this->identification = $identification;

        return $this;
    }
} 