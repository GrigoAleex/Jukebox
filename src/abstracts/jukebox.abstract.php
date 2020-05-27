<?php
// echo "<strong>".$this->name."</strong> is now ready for a new command"; 
abstract class Jukebox {
    protected $name;
    protected $description;
    
    public function __construct($name, $description, $cost){
        $this->name = $name;
        $this->cost = $cost;
        $this->description = $description;
    }

    public function returnName(){
        return $this->name;
    }    

    public function returnDescription(){
        return $this->description;
    }   
   

    private function printErrorMessage($target){
        echo '<p class="alert">Sorry we do not sell '.$target.'</p>';
        echo '<p> Ready for the next order!</p>'; 
    }

    public function getOrder($product) :void{
        echo '<p>The client ordered <strong>'.$product.'</strong></p>';
        $this->checkingIfProductExist($product);
    }

    public function checkingIfProductExist($product) :void{
        $target = ucfirst(strtolower($product));
        if(class_exists($target)){
            $test = new ReflectionClass($target);
            if(!$test->isAbstract())
                $product = new $target();
            else
                echo $this->printErrorMessage($target);
        }
        else
            echo $this->printErrorMessage($target);
    }
}
