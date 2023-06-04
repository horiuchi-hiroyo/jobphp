<?php
// sample6_10.php　に同じ //
class Iphone{
    // プロパティ（クラス内の変数）
    public $type;
    public $price;
    public $color;

    /**
     *  コンストラクタ
     */
    public function __construct($type,$price,$color){
        $this->type = $type;
        $this->price = $price;
        $this->color = $color;
    }

    /**
     *  メソッド：購入内容を確認する
     *  「商品名」の「色」ですね？ 価格は、「価格」です。
     */
    public function confirm(){
        return $this->type."の".$this->color."ですね？<br>価格は、".$this->price."です。";
    }
}

/** ---------------------
 *  クラス：Iphone_sub
 *  継承元：Iphone
 *  --------------------- **/
class Iphone_sub extends Iphone{
    /**
     *  メソッド：支払い
     */
    function pay($payment_way){
        return "<br>お支払は".$payment_way."で宜しいでしょうか？";
    }
}

/* -----------------------------------------------------
*   取引明細
*       タイプ：iPhone XS
*       価格：95,000円
*       色：シルバー
* ----------------------------------------------------- */
    $xs = new Iphone_sub("iphone XS","95,000円","シルバー");
    echo $xs->confirm();
    echo $xs->pay("クレジットカード");
?>