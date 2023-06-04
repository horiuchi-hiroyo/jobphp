<?php
    /** sample6_03.php を編集 **/
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

/** ---------------------
 *  クラス：Helloworld
 *  継承元：AddressList
 *  --------------------- **/
class HelloWorld extends AddressList{
    /**
     *  メソッド：挨拶
     */
    public function helloToWhom(){
        echo "こんにちは！".$this->name."さん<br>";
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

    echo "\r\n ============================ \r\n ";

/* -----------------------------------------------------
*   アドレス情報の入力
*       氏名：佐藤あかり
*       メール：sato@gmail.com
*       電話：090-4444-4444
*       年齢：27
* ----------------------------------------------------- */
    $sato = new HelloWorld("佐藤あかり","sato@gmail.com","090-4444-4444",27);
    echo $sato->helloToWhom();
    echo $sato->addressForm();
?>