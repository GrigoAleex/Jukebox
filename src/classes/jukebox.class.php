<?php  

// echo '<p class="m-0 font-weight-bold" style="color:green">Your drink is ready!</p>';

foreach (glob("abstracts/*.php") as $filename)   include_once $filename;
foreach (glob("classes/*.php") as $filename)    include_once $filename;

class CoffeeJukebox extends Jukebox
{
    public function __construct($name = "Coffee Machine", $description = "Make really cool coffee", $cost = "1$"){
        $this->name = $name;
        $this->cost = $cost;
        $this->description = $description;
    }
}
