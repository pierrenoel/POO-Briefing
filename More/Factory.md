# The design pattern ***Factory***

Let us take a previous example and see how we can apply the design pattern Factory. Before seeing the example, let us focus on what a factory is. In a real world, a factory is a place where you make something, in php it is the same, but it is a factory of objects. So, in other words, a factory is a class who simply creates object. 

## Example

```php
class Player
{
    protected $name;
    protected $life;
    protected $strength;

    public function __construct(string $name, int $life, int $strength)
    {
        $this->name = $name;
        $this->life = $life;
        $this->strength = $strength;
    }

    // Getters
    public function getName() : string 
    {
        return $this->name;
    }

    public function getLife() : int
    {
        return $this->life;
    }

    public function getStrength() : int
    {
        return $this->strength;
    }

    // Setters
    public function setName(string $name) : string
    {
        $this->name = $name;
    }

    public function setLife(int $life) : int
    {
        $this->life = $life;
    }

    public function setStrength(int $strength) : int
    {
        $this->strength = $strength;
    }

    // Other methods
    public function atk(Player $player) : void
    {
        $this->strength += 10;
        
        $player->life -= 1;
    }
}
```

## Let us instanciate the class (the classical way)

```php
$player = new Player('Harry',59,100);
echo $player->getName() .' has '. $player->getLife() . ' points of life';
```

## Let us create the factory of the Player class

```php
class PlayerFactory
{
    public static function create(string $name, int $life, int $strength) : Player
    {
        return new Player($name,$life,$strength);
    }
}
```

If we check the code below, we remark we created a static function called *create*, and in this function, the body is returning a new object. So, let create our first factory object

```php
$player1 = PlayerFactory::create('Harry',50,100);
$player2 = PlayerFactory::create('Voldemort',50,100);
```
