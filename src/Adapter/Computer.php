<?php

namespace App\Adapter;

use App\Adapter\Contracts\ComputerInterface;

class Computer implements ComputerInterface
{
    public function on()
    {
        var_dump('turn on the computer..');
    }

    public function click()
    {
        var_dump('click the computer..');
    }
}