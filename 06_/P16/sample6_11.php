<?php
// クイズ３ //
class Totalprice{
    // プロパティ（クラス内の変数）
    public $price;
    public $haiso;
    public $tax;

    /**
     *  コンストラクタ
     */
    public function __construct($price,$haiso,$tax){
        $this->price = $price;
        $this->haiso = $haiso;
        $this->tax = $tax;
    }

    /**
     *  メソッド：購入内容を確認する
     * 　　金額 = 価格 *（１ + 税率）
     * 　　総額 = 金額 + 配送料
     */
    public function confirm(){
        $shokei = $this->price * (1+$this->tax);
        $gokei = $shokei + $this->haiso;
        return "合計金額は".$gokei."円です。";
    }
}

/** ---------------------
 *  クラス：Totalprice_sub
 *  継承元：Totalprice
 *  --------------------- **/
class Totalprice_sub extends Totalprice{
    /**
     *  メソッド：割引
     */
    public function discount($percentage){
        return "<br>但し、現在キャンペーン期間中につき".$percentage."円を値引きします。";
    }
}

/* -----------------------------------------------------
*   取引明細
*       価格（本体）：1000
*       配送料：300
*       税率：0.08
* ----------------------------------------------------- */
    $message = new Totalprice_sub(1000,300,0.08);
    echo $message->confirm();
    echo $message->discount(200);
?>