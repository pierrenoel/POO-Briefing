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
$user->firstName = 'John';
$user->lastName = 'Doe';
$user->email = 'johndoe@gmail.com';
$user->password = 'ruzo783e';

$user->createUser();
$user->connection();

var_dump($user);



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

$user = new User('John','Doe','johndoe@gmail.com','ruzo783e');

$user->createUser();
$user->connection();

var_dump($user);


## Practice (3)
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

    // Getters
    public function getFirstName() : string 
    {
        return $this->firstName;
    }

    public function getLastName() : string
    {
        return $this->lastName;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    // Setters
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }

    public function setLastName (string $lastName) : void
    {
        $this->lastName = $lastName;
    }

    public function setEmail(string $email) : void 
    {
        $this->email = $email;
    }

    public function setPassword(string $password) : void 
    {
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

 