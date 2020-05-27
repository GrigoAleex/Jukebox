<?php

class Expresso extends Coffee{
    public $coffee;
    public $water;

    public function __construct($water="30ml", $coffee="7g"){
        echo '<p class="success" style="color:green">Started making expresso!</p>';
        $this->water = $water;
        $this->coffee = $coffee;

        $this->makeExpresso();
    }

    protected function makeExpresso(){
        $this->putWater();
        $this->putCoffee();
    }

    public function __destruct(){
        echo '<p class="success" style="color:green">Expresso is ready!</p>';
        echo '<p> Ready for the next order!</p>'; 
    }
}