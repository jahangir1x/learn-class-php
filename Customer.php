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
}