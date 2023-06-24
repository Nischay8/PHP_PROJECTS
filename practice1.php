<?php 
class class1{
    function __construct($y)
    {
        $this->x=$y;
        echo "start";
    }
    function fun1()
    {
        return $this->x;
        // echo "fun1";
    }
    function __destruct()
    {
        echo "stop";
    }
   
}

// fun1(); it Will Give Error As Function cannot be called From Out side It should Be Called By Making Class First 

$obj1=new class1(20);
$value=$obj1->fun1();
echo $value;
?>