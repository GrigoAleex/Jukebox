<?php   

include_once "abstracts/jukebox.abstract.php";
foreach (glob("interfaces/*.php") as $filename)
{
    include $filename;
}

class CoffeeJukebox extends Jukebox implements Product, Coffee, Chocolatemilk
{
    public $name;
    public $cost;
    public $description;
    public $message;

    public function __construct($name, $description, $cost = 1.50){
        $this->name = $name;
        $this->cost = $cost;
        $this->description = $description;
    }
    public function __destruct(){ 
        echo "<strong>".$this->name."</strong> is now ready for a new command"; 
    } 

    public function returnName() :string{
        return $this->name;
    }

    public function returnCost() :number{
        return $this->cost;
    }

    public function deliverProduct($product) :string{
        $this->message = "<p class='m-0' style='color: green'>The product <strong>".strtolower($product)."</strong> was delivered!</p>"; 
        return $this->message;
    }

    public function checkingIfProductExist($product) :void{
        $target = ucfirst(strtolower($product));
        if(class_implements($this)[$target])
           $this->deliverProduct($product);
    }

    public function getOrder($product) :string{
        echo "<p class='m-0'>The client ordered <strong>".$product. "</strong></p>";
        $this->message = "<p class='m-0' style='color: red'>We currently <strong> do not have </strong> this product</p>";
        $this->checkingIfProductExist($product);
        return $this->message;
    }
}
