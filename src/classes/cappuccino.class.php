<?php

class Cappuccino extends Coffee {
    public $water;
    public $coffee;
    public $milk;

    public function __construct($milk="25ml", $water="80ml", $coffee="7g"){
        echo '<p class="font-weight-bold m-0" style="color:green">Started making Cappuccino!</p>';
        $this->water = $water;
        $this->milk = $milk;
        $this->coffee = $coffee;

        $this->putWater();
        $expresso =  new Expresso();
        unset($expresso);
        $this->putCoffee();
        $this->putMilk();
        $this->putWhipcream();
    }

    public function __destruct(){
        echo '<p class="font-weight-bold m-0" style="color:green">Cappuccino is ready!</p>';
    }

    public function putWater() :void{
        echo '<p class="m-0">Adding <strong>'.$this->water.'</strong> of water</p>';
    }

    public function putCoffee() :void{
        echo '<p class="m-0">Adding <strong>'.$this->coffee.'</strong> of coffee</p>';
    }

    public function putMilk() :void{
        echo '<p class="m-0">Adding <strong>'.$this->milk.'</strong> of milk</p>';
    }

    public function putWhipcream() :void{
        echo '<p class="m-0">Adding <strong> whipcream </strong></p>';
    }
}