# Heritage

Okay, for this example, let us create a player class and add a method **atk** The method attack is particular. When a player attacks another one, he obtains 10 points of strength but the other loses life.

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
