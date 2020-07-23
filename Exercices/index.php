<?php

class User{

    public $firstName;

    function comment()
    {
        return 'The user wrote a comment';
    }

}

$john = new User();

$john->firstName = 'Pierre';

var_dump($john);

echo $john->comment();

?>