<?php

abstract class Coffee {
    public $coffee;
    public $milk;
    public $sugar;
    public $water;

    public function putWater() :void{
        echo '<p>Adding <strong>'.$this->water.'</strong> of water</p>';
    }

    public function putCoffee() :void{
        echo '<p>Adding <strong>'.$this->coffee.'</strong> of coffee</p>';
    }

    public function putMilk() :void{
        echo '<p>Adding <strong>'.$this->milk.'</strong> of milk</p>';
    }

    public function putWhipcream() :void{
        echo '<p>Adding <strong> whipcream </strong></p>';
    }
}