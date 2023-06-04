<?php

class Yasaiset01{
    // プロパティ（クラス内の変数）
    public $name;
    public $price;
    public $deli;
    public $tax;

    /**
     *  コンストラクタ
     */
    public function __construct($name2,$price2,$deli2,$tax2){
        $this->name = $name2;
        $this->price = $price2;
        $this->deli = $deli2;
        $this->tax = $tax2;
    }

    /**
     *  メソッド：料金計算
     *      価格 = 税抜き価格 +（税抜き価格 * 税率）+ 送料 
     */
    public function cal(){
        return $this->price +
                 ($this->price * $this->tax) +
                  $this->deli;
    }
}

/* -----------------------------------------------------
*   野菜セットを作成
*       商品名称：北海道野菜セット
*       税抜き価格：450円
*       税率：0.08（= 8%）
*       送料：300円
* ----------------------------------------------------- */
    $hokkaido = new Yasaiset01("北海道野菜セット",450,300,0.08);
    echo "商品名：".$hokkaido->name."<br>";
    echo "税抜き価格：".$hokkaido->price."円 <br>";
    echo "送料：".$hokkaido->deli."円 <br>";
    echo "合計金額：".$hokkaido->cal()."円";
?>