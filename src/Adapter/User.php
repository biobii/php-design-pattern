<?php

namespace App\Adapter;

use App\Adapter\Contracts\ComputerInterface;

class User
{
    public function turnOn(ComputerInterface $device)
    {
        $device->on();
        $device->click();
    }
}