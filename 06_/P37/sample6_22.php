<?php

class Iphone{
    protected $type;
    protected $price;

    public function __construct($type,$price){
        $this->type = $type;
        $this->price = $price;
    }
}

/** ---------------------
 *  クラス：Iphone_sub
 *  継承元：Iphone
 *  --------------------- **/
class Iphone_sub extends Iphone{
    public function getIphone(){
        echo $this->type;
        echo "\r\n";
        echo $this->price;
    }
}

$xs = new Iphone_sub("iPhone XS","95,000円");
echo $xs->getIphone();

?>