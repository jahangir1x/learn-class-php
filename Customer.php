<?php
class Customer
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($id, $firstName, $lastName, $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __toString()
    {
        return "ID: " . $this->id . "\n" .
            "First Name: " . $this->firstName . "\n" .
            "Last Name: " . $this->lastName . "\n" .
            "Email: " . $this->email . "\n";
    }

    public function __call($method, $args)
    {
        $operation = substr($method, 0, 3);
        $property = lcfirst(substr($method, 3));
        if ($operation === 'get') {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
        } elseif ($operation === 'set') {
            if (property_exists($this, $property)) {
                $this->$property = $args[0];
            }
        }
    }
}