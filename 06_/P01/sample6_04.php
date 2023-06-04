<?php
// クイズ１ //
class Users{
    // プロパティ（クラス内の変数）
    public $name;
    public $company;

    /**
     *  コンストラクタ
     */
    public function __construct($name,$company){
        $this->name = $name;
        $this->company = $company;
    }

    /**
     *  メソッド：紹介文
     *  「お世話になります。（会社）の（氏名）です。」 
     */
    public function introdction(){
        return "お世話になります。".$this->company."の".$this->name."です。";
    }
}

/* -----------------------------------------------------
*   紹介カードの入力
*       氏名：山田
*       会社：ABC株式会社
* ----------------------------------------------------- */
    $yamada = new Users("山田","ABC株式会社");
    echo $yamada->introdction();
?>