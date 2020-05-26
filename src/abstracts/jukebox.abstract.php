<?php

abstract class Jukebox {
    public $name;
    public $description;
    
    abstract public function getOrder($product) :void;
}
