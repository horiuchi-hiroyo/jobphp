<?php

class Name{
    // プロパティ（クラス内の変数）
    private $name;

    /**
     *  コンストラクタ
     */
    public function __construct($name){
        $this->name = $name;
    }

    /**
     *  メソッド：挨拶
     * 　   私の名前は「名前」です。
     */
    public function Aisatsu(){
        return "私の名前は".$this->name."です。";
    }
}

?>