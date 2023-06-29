<?php
abstract class parentclass{
    public $name;
    abstract protected function calc($a,$b);
}


class childclass extends parentclass{
    public function calc($a,$b){ //The calc Function must be same as above(parameters must be Same);
echo $a+$b;
    }
}
$test=new childclass();
$test->calc(10,50);

?>