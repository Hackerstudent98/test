<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/4/2017
 * Time: 11:04 AM
 */
class PublicVis
{
    private $password;
    private function openSesame($someData)
    {
        $this->password= $someData;
        if($this->password == "secret")
        {
            echo "You're in <br/>";
        }else{
            echo "Release the hounds!<br/>";
        }

    }
    public  function unlock($safe)
    {
        $this->openSesame($safe);
    }
}
$worked = new PublicVis();

$worked->unlock("no");