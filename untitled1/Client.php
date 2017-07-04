<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/4/2017
 * Time: 11:24 AM
 */
include_once ('Dogs.php');
include_once ('Cats.php');
class Client extends Dogs
{
    function __construct()
    {
        $dogs= new Dogs;
        $cats= new Cats;
    }
}
$workes = new Client();