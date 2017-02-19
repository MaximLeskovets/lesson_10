<?php


class animals
{
    private $feature = "нет";

    public function createAnimal()
    {
        return "В зоопарке появилось новое животное, ";
    }

    public function getFeature()
    {
        return $this->feature;
    }

    public function textSound()
    {
        return " и она ";
    }

    public function feature()
    {
        if ($this->getFeature()=="копыта")
        {
            return " и у неё есть копыта.";
        }
        elseif ($this->getFeature()== "клюв")
        {
            return " есть клюв.";
        }else
        {
            return false;
        }
    }


    public function __construct($color)
    {
        echo $this->createAnimal() . $color . $this->getName() . $this->getSound(). $this->feature();
    }

}