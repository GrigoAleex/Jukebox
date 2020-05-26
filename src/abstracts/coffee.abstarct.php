<?php

abstract class Coffee {
    public $coffee;
    public $milk;
    public $sugar;
    public $water;

    abstract public function putCoffee() :void;
    abstract public function putWater() :void;
}