<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Mobile{
    public $brand;
    public $price;
    public $model;
   static $accessories= array("charger","earphones");
public function __construct($brand,$price,$model){
    $this->brand=$brand;
    $this->price=$price;
    $this->model=$model;
}
function __destruct()
{
    echo "thanks for shopping";
}
function printDetails(){
    echo "brand:   $this->brand,<br>";
    echo "price:   $this->price,<br>";
    echo "model:  $this->model,<br>";
    for ($i=0; $i <count(self::$accessories) ; $i++) { 
        echo "accessories:" . self::$accessories[$i],"<br>";
    }
    
}
private function calcDiscount($amount){
    return $this->price-$amount;
}
public function showDiscount($amount){
    echo "Bonus:",$this->calcDiscount($amount);
}
}  
$mob= new Mobile("realme",15000,"5i");
$mob->printDetails();
$mob->showDiscount(500);

$mob1= new Mobile("redmi",10000,"6t");
$mob1->printDetails();
$mob1->showDiscount(700);


?>
</body>
</html>
