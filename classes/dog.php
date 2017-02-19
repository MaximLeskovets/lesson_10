<?php

require_once "animals.php";
require_once "zoo.php";

class dog extends animals implements zoo
{
    private $sound = "лает.";
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function getSound()
    {
        return $this->textSound() . $this->sound;
    }

    public function createAnimal()
    {
        return "В зоопарке появилась новая порода собак: ";
    }

    public function __construct($color, $breed)
    {
        $this->name = $breed;
        echo $this->createAnimal() . $color . " по кличке ". $breed .  $this->getSound();
    }


}