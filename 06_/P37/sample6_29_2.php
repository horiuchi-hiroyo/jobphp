<?php

class Circle{
    private $radius;        //  半径を格納するプロパティ

    // 半径の値をプロパティに設定するセッターメソッド   //
    public function setRadius($abc){
        $this->radius = $abc;
    }

    // 半径の値を返すゲッターメソッド   //
    public function getRadius(){
        return $this->radius;
    }
}

    $obj = new Circle();
    $obj->setRadius(20) ;
    echo "半径：".$obj->getRadius();

?>