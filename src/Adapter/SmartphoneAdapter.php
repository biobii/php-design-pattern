<?php

namespace App\Adapter;

use App\Adapter\Contracts\ComputerInterface;
use App\Adapter\Contracts\SmartphoneInterface;

class SmartphoneAdapter implements ComputerInterface
{
    protected $smartphone;

    public function __construct(SmartphoneInterface $smartphone)
    {
        $this->smartphone = $smartphone;
    }

    public function on()
    {
        $this->smartphone->on();
    }

    public function click()
    {
        $this->smartphone->tap();
    }
}