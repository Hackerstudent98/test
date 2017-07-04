<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/4/2017
 * Time: 11:17 AM
 */
class FurryPets
{
    protected $sound;
    protected function fourlegs()
    {
        return "walk on all fours";
    }
    protected function makesSound($petNoise)
    {
        $this->sound = $petNoise;
        return $this->sound;
    }


}