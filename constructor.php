<?php
class person{
    public $name;
    public $age;
    function __construct($name="Nischay",$age=20)
    {
        $this->name=$name;
        $this->age=$age;
    }
    function show(){
        echo $this->name. "_".$this->age;
    }
}


$object=new person();
$object->show();
?>