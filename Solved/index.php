<?php

/* 
Créer la class SendMessage. Cette class va permettre d'envoyer un message identique sur différents réseaux sociaux
en appellant une seule fonction!
*/

interface MessageInterface
{
    public function facebook() : void;
    public function twitter() : void;
    public function linkedin() : void;
}

class Message implements MessageInterface
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getMessage() : void
    {
        echo $this->message;
    }

    public function setMessage() : string
    {
        $this->message = $this->message;
    }

    public function facebook() : void
    {
        echo $this->message . ' a été publiée sur Facebook';
    }

    public function twitter() : void
    {
        echo $this->message . ' a été publiée sur Twitter';
    }

    public function linkedin() : void
    {
        echo $this->message . ' a été publiée sur Linkedin';
    }

}

class MessageFacade 
{
    protected $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function publish()
    {
        $this->message->facebook();
        $this->message->twitter();
        $this->message->linkedin();
    }
}

$message = new MessageFacade(new Message('Hello, I am happy to publish this first message'));
$message->publish();