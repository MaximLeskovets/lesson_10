<?php

require_once "animals.php";
require_once "zoo.php";

class horse extends animals implements zoo
{

    private $feature = "копыта";
    private $name = " лошадь,";
    private $sound = "ржет";

    public function getName()
    {
        return $this->name;
    }

    public function getSound()
    {
        return $this->textSound() . $this->sound;
    }

    public function getFeature()
    {
        return $this->feature;
    }
    public function textSound()
    {
        return " она громко ";
    }
}