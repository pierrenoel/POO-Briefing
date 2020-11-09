# Facades 

Before I explain you what a facade is, let us look at this example.

Imagine we have a facade which have two methods, one to set a message and another to share this message.  

```php
Interface ShareInterface{
    public function setMessage(string $message);
    public function share();
}
```

 Imagine you want to share the same message to Facebook and Linkedin. The thing to do is to create many classes inhered from the ShareInterface for the different social networks.

 ```php
class Facebook implements ShareInterface{

    private $message;

    public function setMessage(string $message){
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

The problem above is that we repeat exactly the same code twice, not very good in our case, we need to refactor this a little bit better. So, we can create a facade.

```php
class ShareFacade{

    private $facebook;
    private $linkedin;

    public function __construct($facebook, $linkedin){
        $this->facebook = $facebook;
        $this->linkedin = $linkedin;
    }

}
```

We see that a facade is a simple class, in this case, we have two attributes (Facebook and Likedin) and a constructor. So simple.

Now, let us take our two methods **setMessage(string $message)** and **share()**

```php
class ShareFacade{

    private $facebook;
    private $linkedin;

    public function __construct($facebook, $linkedin){
        $this->facebook = $facebook;
        $this->linkedin = $linkedin;
    }

    public function setMessage(string $message){
    
    }

    public function share(){

    }

}
```

And in those methods, let us call the same function for each social networks.

```php
class ShareFacade{

    private $facebook;
    private $linkedin;

    public function __construct($facebook, $linkedin){
        $this->facebook = $facebook;
        $this->linkedin = $linkedin;
    }

    public function setMessage($message){
        $this->facebook->setMessage($message);
        $this->linkedin->setMessage($message);
    }

    public function share(){
        $this->facebook->share();
        $this->linkedin->share();
    }
}

```

To finish this section, let us inhered the ShareFacade

```php
$socialMedia = new ShareFacade(new Facebook(), new Linkedin());
$socialMedia->setMessage('Learning facade pattern')->share();
```

## Other example 

```php
interface CarInterface
{
    public function open() : void;
    public function start() : void;
    public function run() : void;
}

class Car implements CarInterface
{
    public function open() : void
    {
        echo 'The car is opened';
    }

    public function start() : void 
    {
        echo 'The card is started';
    }

    public function run() : void 
    {
        echo 'The car is running';
    }
}

class FacadeCar
{
    protected $car;

    public function __construct(Car $car){
        $this->car = $car;
    }

    public function turnOn()
    {
        $this->car->open();
        $this->car->start();
        $this->car->run();
    }
}


$car = new FacadeCar(new Car());
$car->turnOn();

```