<?php

class AddressList{
    // プロパティ（クラス内の変数）
    public $name;
    public $mail;
    public $tel;
    public $age;

    /**
     *  コンストラクタ
     */
    public function __construct($name,$mail,$tel,$age){
        $this->name = $name;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->age = $age;
    }

    /**
     *  メソッド：アドレス形式
     */
    public function addressForm(){
        return "氏名：".$this->name."<br>".
               "メール：".$this->mail."<br>".
               "電話：".$this->tel."<br>".
               "年齢：".$this->age."歳";
    }
}

/* -----------------------------------------------------
*   アドレス情報の入力
*       氏名：山田太郎
*       メール：yamada@gmail.com
*       電話：090-1111-2222
*       年齢：25
* ----------------------------------------------------- */
    $yamada = new AddressList("山田太郎","yamada@gmail.com","090-1111-2222",25);
    echo $yamada->addressForm();
?>