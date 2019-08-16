<?php

namespace App\Template;

use App\Template\Drink;

class Coffee extends Drink
{
    protected function addIngredients()
    {
        var_dump('add the coffee..');

        return $this;
    }
}