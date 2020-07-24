# Heritage

For this example, let us create a player class and add a method **atk**. When a player attacks another one, he obtains 10 points of strength but the other loses point of life.

```php
class Player
{
    public $pseudo;
    public $life = 100;
    public $strength;

    public function __construct($pseudo, $strength)
    {
        $this->pseudo = $pseudo;
        $this->strength = $strength;
    }

    public function atk(Player $player)
    {
        $this->strength += 10;
        $player->life -= 10; 
    }
    
}

```

Now, I need to create a magician and add just one attribute **$magic** which refers to the power of the magician. we can copy and paste the Player class but it is not what we are going to do. Magician can be inherited from the player class.

```php
class Magician extends Player
```

That means that Magician now have all the attributes and the methods from the Player class, so how does it work with the constructor?

```php
class Magician extends Player
{
    public $magic;

    public function __construct($pseudo, $strength, $magic)
    {
        $this->magic = $magic;
        parent::__construct($pseudo,$strength);
    }

    //...

}
```

We have decided that when the magician calls the method **atk()** he gains 20 of life, what we can do is to call the method **atk()** from the Player class. 

```php

public function atk(Player $player)
{
    parent::atk($player);

    $this->strength += 10;
}

```

## Public, protected, private

So now let us pay attention to the keyword **public** before each attribute and each function: 
- **Public** means that all the attributes and all the methods are available anywhere in your code
- **Protected** means that all the attribute or all the method are available in the current class but also in the inherited class
- **Private** means that all the attributes or all the methods are available only in the current class (not instantiable)

So, in our case, we can change all the public key by a protected key.
