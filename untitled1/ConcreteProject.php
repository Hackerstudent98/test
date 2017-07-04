<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/4/2017
 * Time: 11:00 AM
 */
include_once ('ProtectVis.php');
class ConcreteProject extends ProtectVis
{
    function __construct()
    {
        $this->countMoney();
    }
    protected function countMoney()
    {
        // TODO: Implement countMoney() method.
        echo $this->wage . $this->setHourly(30);
    }
}
$worked = new ConcreteProject();
