<?php

namespace App\Template;

use App\Template\Drink;

class Tea extends Drink
{
    protected function addIngredients()
    {
        var_dump('add the tea..');

        return $this;
    }
}