<?php

abstract class Jukebox {
    public $name;
    public $cost;
    public $description;
    
    abstract public function returnName() :string;
    abstract public function returnCost() :number;
}
