<?php

namespace App\Template;

abstract class Drink
{
    public function make()
    {
        return $this
                ->addIngredients()
                ->addSugar()
                ->addWater();
    }

    abstract protected function addIngredients();

    protected function addSugar()
    {
        var_dump('add some sugar..');

        return $this;
    }

    protected function addWater()
    {
        var_dump('add the water..');

        return $this;
    }
}