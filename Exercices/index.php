<?php


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

class Magician extends Player
{
    public $magic;

    public function __construct($pseudo, $strength, $magic)
    {
        $this->magic = $magic;
        parent::__construct($pseudo,$strength);
    }

    public function atk(Player $player)
    {
        parent::atk($player);
        $this->strength += 10;
    }


}

$player1 = new Magician('Jean', 40, 100);
$player2 = new Magician('Henry',60 ,100);
$player1->atk($player2);
echo $player1->strength;