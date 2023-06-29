<?php
class base{
    private $name;
    public function __construct($n)
    {
        $this->name=$n;
    }
    protected function show(){
        echo "Your Name:".$this->name."<br>";
    }
}

class derived extends base{
    public function get()
    {
        echo "Your Name:" . $this->name . "<br>";
    }
}
$test=new derived("Nischay Sinha");
$test->get();
?>