<?php

class Expresso extends Coffee{
    public $coffee;
    public $water;

    public function __construct($water="30ml", $coffee="7g"){
        echo '<p class="font-weight-bold m-0" style="color:green">Started making expresso!</p>';
        $this->water = $water;
        $this->coffee = $coffee;

        $this->putWater();
        $this->putCoffee();
    }

    public function __destruct(){
        echo '<p class="font-weight-bold m-0" style="color:green">Expresso is ready!</p>';
    }

    public function putWater() :void{
        echo '<p class="m-0">Adding <strong>'.$this->water.'</strong> of water</p>';
    }

    public function putCoffee() :void{
        echo '<p class="m-0">Adding <strong>'.$this->coffee.'</strong> of coffee</p>';
    }
}