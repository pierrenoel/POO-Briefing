# Facades 

Before I explain you what a facade is, let us look at this example.

Imagine we have a facade which have two methods, one to set a message and another to share this message.  

```php
Interface ShareInterface{
    public function setMessage($message);
    public function share();
}
```

 Imagine you want to share the same message to Facebook, twitter and Linkedin. The thing to do is to create many classes inhered from the ShareInterface for the different social networks.

 ```php
class Facebook implements ShareInterface{

    private $message;

    public function setMessage($message){
        $this->message = $message;
    }

    public function share(){
        echo sprintf('Sharing "%s" on Facebook.', $this->message).PHP_EOL;
    }

}

class Linkedin implements ShareInterface{

    private $message;

    public function setMessage($message){
        $this->message = $message;
    }

    public function share(){
        echo sprintf('Sharing "%s" on Linkedin.', $this->message).PHP_EOL;
    }
}

 ```

 Now if you want to share the message, we have to instantiate those classes

```php
$facebook = new Facebook();
$facebook->setMessage('Learning Facade pattern');
$facebook->share();

$linkedin = new Linkedin();
$linkedin->setMessage('Learning Facade pattern');
$linkedin->share();
```