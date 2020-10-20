# Heritage

For this example, let us create a player class and add a method **atk**. When a player attacks another one, he obtains 10 points of strength but the other loses point of life.

```php
class Player
{
    protected $pseudo;
    protected $life = 100;
    protected $strength;

    public function __construct(string $pseudo, int $strength)
    {
        $this->pseudo = $pseudo;
        $this->strength = $strength;
    }

    public function getPseudo() : string
    {
        return $this->pseudo;
    }
    // ...

    public function setPseudo(string $pseudo) : string
    {
        $this->pseudo = $pseudo;
    }

    public function atk(Player $player) : void
    {
        $this->strength += 10;
        $player->life -= 10; 
    }
    
}

```

```php
$player1 = new Player('Harry',130);
$player2 = new Player('Voldemort',200);

$player1->atk($player2);

var_dump($player1,$player2);

// object(Player)#1 (3) { ["pseudo"]=> string(5) "Harry" ["life"]=> int(100) ["strength"]=> int(140) } object(Player)#2 (3) { ["pseudo"]=> string(9) "Voldemort" ["life"]=> int(90) ["strength"]=> int(200) }

```

Now, I need to create a magician and add just one attribute **$magic** which refers to the power of the magician. we can copy and paste the Player class but it is not what we are going to do. Magician can be inherited from the player class.

```php
class Magician extends Player
```

That means that Magician now have all the attributes and the methods from the Player class, so how does it work with the constructor?

```php
class Magician extends Player
{
    protected $magic;

    public function __construct(string $pseudo, int $strength, int $magic)
    {
        $this->magic = $magic;
        parent::__construct( string $pseudo,int $strength);
    }

    public function getMagic() : int
    {
        return $this->magic;
    }

    public function setMagic(int $magic) : int
    {
        $this->magic = $magic;
    }

    //...

}
```

We remarke that calling the constructor of the parent class we use the keyword ```parent``` fellowed by three double points.

```php
parent::__construct(string $pseudo, int $strength);
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

- [Previous](../03.methods/readme.md)
- [Next](../05.abstract/readme.md)