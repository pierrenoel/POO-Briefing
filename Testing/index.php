<?php

// Création de la class Player

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

// Création de la factory Player

class PlayerFactory
{
    public static function create(string $name, int $life, int $strength) : Player
    {
        return new Player($name,$life,$strength);
    }
}

$player1 = PlayerFactory::create('Harry',50,100);
$player2 = PlayerFactory::create('Voldemort',50,100);

echo $player1->getName() .' a '. $player1->getLife() . ' de points de vie';
echo "<br>";
echo $player2->getName() .' a '. $player2->getLife() . ' de points de vie';
echo "<br>";
echo $player1->getName() . ' frappe sur ' . $player2->getName();
echo "<br>";

$player1->atk($player2);

echo $player2->getName() .' a maintenant '. $player2->getLife() . ' de points de vie';
echo "<br>";
echo $player1->getName() . ' a maintenant ' . $player1->getStrength();


