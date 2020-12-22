<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   class Student{
       private $name;
       private $studentId;
       private $dept;
       private $city;
   
       public function setName($name){
        $this->name=$name;
    } 
    
    public function setstudentId($id){
        $this->studentid=$id;
    }
    public function setDepart($dept){
        $this->depart=$dept;
    }
    public function setCity($city){
        $this->city=$city;
    }
    public function getName(){
        echo"name:$this->name.<br>";
    }
    public function getstudentId(){
        echo"studentid:$this->studentid.<br>";
    }
    public function getDepart(){
        echo"department:$this->dept.<br>";
    }
    public function getCity(){
        echo"city:$this->city.<br>";
    }
    public function showGrades($marks1,$marks2,$marks3){
        $avg=($marks1+$marks2+$marks3)/3;
        if($avg>=90){
            echo"grade A+";
        }elseif ($avg>=80&&$avg<90) {
            echo"grade:B";
        }elseif($avg>=70&&$avg<80){
            echo"grade:C";
        }else {
          echo "grade:F better luck next time";
        }

        }
    }
    $stud=new Student();
    $stud->setName("rishi");
    $stud->setstudentId(7);
    $stud->setDepart("IT");
    $stud->setCity("SHIRPUR");
    $stud->getName();
    $stud->getstudentId();
    $stud->getDepart();
    $stud->getCity();
    $stud->showGrades(90,80,75);
    ?>
</body>
</html>