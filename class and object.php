<?php
class Calculation
{
 public $a,$b,$c;
 function sum(){
 $this->c=$this->a+$this->b;
 return $this->c;
 }
 function sub(){
 $this->c=$this->a-$this->b;
 return $this->c;
 }
}
 $c1=new Calculation();
 
 $c1->a=20;
 $c1->b=10;
 $c1->sum();
 $c1->sub();
 
 echo "Addition :".$c1->sum()."<br>";
 echo "Substraction :".$c1->sub();

?>