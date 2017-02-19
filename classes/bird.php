<?php
require_once "animals.php";
require_once "zoo.php";

class bird extends animals implements zoo
{

    private $feature = "клюв";
    private $name = " птица,";
    private $sound = "каркает.";

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
}