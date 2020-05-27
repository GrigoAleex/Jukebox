<?php

class Cappuccino extends Coffee {
    public $water;
    public $coffee;
    public $milk;

    public function __construct($milk="25ml", $water="80ml", $coffee="7g"){
        echo '<p class="success" style="color:green">Started making Cappuccino!</p>';
        $this->water = $water;
        $this->milk = $milk;
        $this->coffee = $coffee;

        $this->makeCappucino();
    }

    protected function makeCappucino(){
        $this->putWater();
        $expresso =  new Expresso();
        unset($expresso);
        $this->putCoffee();
        $this->putMilk();
        $this->putWhipcream();
    }

    public function __destruct(){
        echo '<p class="success" style="color:green">Cappuccino is ready!</p>';
        echo '<p> Ready for the next order!</p>'; 
    }
}