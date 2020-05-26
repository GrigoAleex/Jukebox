<?php   

foreach (glob("abstracts/*.php") as $filename)   include_once $filename;
foreach (glob("classes/*.php") as $filename)    include_once $filename;
foreach (glob("interfaces/*.php") as $filename) include_once $filename;

class CoffeeJukebox extends Jukebox implements Product, Chocolatemilk
{
    public $name;
    public $description;

    public static function printErrorMessage($target){
        echo '<p class="m-0" style="color:red">Sorry we do not sell <strong>'.$target.'</strong></p>';
    }

    public function __construct($name, $description, $cost = 1.50){
        $this->name = $name;
        $this->cost = $cost;
        $this->description = $description;
    }
    public function __destruct(){ 
        echo "<strong>".$this->name."</strong> is now ready for a new command"; 
    } 

    public function deliverProduct($product) :string{
        return $this->message;
    }

    public function checkingIfProductExist($product) :void{
        $target = ucfirst(strtolower($product));
        if(class_exists($target)){
            $test = new ReflectionClass($target);
            if(!$test->isAbstract())
                $product = new $target();
            else
                echo self::printErrorMessage($target);
        }
        else
            echo self::printErrorMessage($target);
    }

    public function getOrder($product) :void{
        echo "<p class='m-0'>The client ordered <strong>".$product. "</strong></p>";
        $this->checkingIfProductExist($product);
    }
}
