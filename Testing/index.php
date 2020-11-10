<?php

//  Practice (1)

class User
{
    public $firstName;
    public $lastName;
    public $email;
    public $password;

    public function createUser() : string
    {
        return "The user is created";
    }

    public function connection() : void
    {
        echo "The user is connected";
    }
}

$user = new User;
$user->firstName = 'Pierre';
$user->lastName = 'Noël';
$user->email = 'pierre@gmail.com';
$user->password = 'ruzo783e';

$user->createUser();
$user->connection();



//  Practice (2)

class User
{
    public $firstName;
    public $lastName;
    public $email;
    public $password;

    public function __construct($firstName,$lastName,$email,$password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    public function createUser() : string
    {
        return "The user is created";
    }

    public function connection() : void
    {
        echo "The user is connected";
    }
}