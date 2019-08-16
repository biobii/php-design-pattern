<?php

namespace App\Adapter;

use App\Adapter\Contracts\SmartphoneInterface;

class Android implements SmartphoneInterface
{
    public function on()
    {
        var_dump('turn on the Android phone..');
    }

    public function tap()
    {
        var_dump('tap the Android phone..');
    }
}