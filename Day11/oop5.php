<?php
class bankAccount{
    public $name;
    private $balance=0;
    private $texes=50;
    public function despoit($amount){
        $this->balance+=$amount;
    }
    public function withd($amount){
        $this->balance-=$amount;
    }
    public function totalb(){
        $this->withd($this->texes);
        echo"Name: ".$this->name."<br>";
        
        echo"total balance after texes:" .$this->balance."<br>";
    }
}

$account=new bankAccount();
$account->name="hazem";
$account->despoit(3000);
$account->totalb();
$account->withd(400);
$account->totalb();



?>