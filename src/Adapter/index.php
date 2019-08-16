<?php

require __DIR__ . '/../../vendor/autoload.php';

// implementation without adapter
(new App\Adapter\User)->turnOn(new App\Adapter\Computer);

// implementation with adapter
(new App\Adapter\User)
    ->turnOn(new App\Adapter\SmartphoneAdapter(new App\Adapter\Android));

(new App\Adapter\User)
    ->turnOn(new App\Adapter\SmartphoneAdapter(new App\Adapter\Iphone));