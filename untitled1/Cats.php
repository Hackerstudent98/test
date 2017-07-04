<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/4/2017
 * Time: 11:21 AM
 */
include_once ('FurryPets.php');
class Cats extends FurryPets
{
    function __construct()
    {
        echo "cats". $this->fourlegs() . "<br/>";
        echo $this->makesSound("Meo, Purrr") ."<br/>";
        echo $this->owsHouse() . "<br/>";
    }
    private function owsHouse()
    {
        return "i'll walking on this keybroads";
    }

}