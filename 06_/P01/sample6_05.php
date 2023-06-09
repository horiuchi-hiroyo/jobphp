<?php
// クイズ２ //
class Animals{
    // プロパティ（クラス内の変数）
    public $name;

    /**
     *  コンストラクタ
     */
    public function __construct($name){
        $this->name = $name;
    }

    /**
     *  メソッド：動作
     *  「（生き物）が（動作）する」 
     */
    public function dosa($_suru){
        return $this->name."が".$_suru."。";
    }
}

/* -----------------------------------------------------
*   生き物の動き（１）
*       生き物：犬
*       動作：歩く
* ----------------------------------------------------- */
    $dog = new Animals("犬");
    echo $dog->dosa("歩く");

/* -----------------------------------------------------
*   生き物の動き（２）
*       生き物：猫
*       動作：寝る
* ----------------------------------------------------- */
    $cat = new Animals("猫");
    echo $cat->dosa("寝る");

?>