<?php

namespace App\Adapter;

use App\Adapter\Contracts\SmartphoneInterface;

class Iphone implements SmartphoneInterface
{
    public function on()
    {
        var_dump('turn on the iPhone..');
    }

    public function tap()
    {
        var_dump('tap the iPhone..');
    }
}