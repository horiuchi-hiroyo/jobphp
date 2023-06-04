<?php

class Iphone{
    /**
     *  protected → private
     *  ( クラス内参照に限定される「private」にすると… )
     * Warning: Undefined property: Iphone_sub::$type in
     *   C:\xampp\htdocs\php_202304\06_\sample6_22_2.php on line 22
     * Warning: Undefined property: Iphone_sub::$price in
     *   C:\xampp\htdocs\php_202304\06_\sample6_22_2.php on line 24
     */
    private $type;
    private $price;

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