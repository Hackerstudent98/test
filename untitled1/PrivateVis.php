<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/4/2017
 * Time: 10:48 AM
 */
class PrivateVis
{
    private $money;

    public function __construct()
    {
        $this->money=200;
        $this->secret();
    }
    private function secret()
    {
        echo $this->money;
    }
}

$worked = new PrivateVis();
