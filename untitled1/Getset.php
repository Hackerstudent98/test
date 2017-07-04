<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/4/2017
 * Time: 11:10 AM
 */
class Getset
{
    private $dataWarehouse;

    function __construct()
    {
        $this->setter(200);
        $got = $this->getter();
        echo $got;
    }

    private function getter()
    {
        return $this->dataWarehouse;
    }

    private function setter($setvalue)
    {
        $this->dataWarehouse= $setvalue;
    }
}
$worker = new Getset();