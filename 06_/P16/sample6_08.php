<?php
    /** sample6_04.php を編集 **/
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

/** ---------------------
 *  クラス：Abc
 *  継承元：Users
 *  --------------------- **/
class Abc extends Users{
    /**
     *  メソッド：お礼
     */
    public function xyz(){
        echo $this->introdction()."<br>先日は有難うございました。";
    }
}

/* -----------------------------------------------------
*   紹介カードの入力
*       氏名：鈴木
*       会社：HTML株式会社
* ----------------------------------------------------- */
    $suzuki = new Abc("鈴木","HTML株式会社");
    echo $suzuki->xyz();
?>