<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/4/2017
 * Time: 10:54 AM
 */
abstract class ProtectVis
{
    abstract protected function countMoney();
    protected $wage;

    protected function setHourly($hourly)
    {
        $monney = $hourly;
        return $monney;
    }
}