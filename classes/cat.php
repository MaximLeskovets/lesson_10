<?php

require_once "animals.php";
require_once "zoo.php";

class cat extends animals implements zoo
{
    private $name = " кошка";
    private $sound = "мяукает.";

    public function getName()
    {
        return $this->name;
    }

    public function getSound()
    {
        return $this->textSound() . $this->sound;
    }
}