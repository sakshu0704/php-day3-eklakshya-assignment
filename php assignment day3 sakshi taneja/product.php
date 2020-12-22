<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Product{
        public $brand;
        public $price;
        public $quantity;

    
    function __construct($brand,$price,$quantity){
        $this->brand=$brand;
        $this->price=$price;
        $this->quantity=$quantity;
    }
    function totalCost(){
        echo($this->price * $this->quantity),"<br>";
    }
}

class Laptop extends Product{
    public $accessories= array("charger","mouse");

    function showAccessories(){
        for($i=0;$i<count($this->accessories);$i++){
            echo"accessories:".$this->accessories[$i],"<br>";
        }
    }
}
$pro=new Laptop("lenovo",70000,5);
$pro->totalCost();
$pro->showAccessories();
?>
</body>
</html>