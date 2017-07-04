<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/4/2017
 * Time: 11:19 AM
 */
include_once ('FurryPets.php');
class Dogs extends FurryPets
{
    function __construct()
    {
        echo "Dogs". $this->fourlegs() . "<br/>";
    }
    private function guardsHouse()
    {
        return "Grrrrr" . "<br/>";
    }
}