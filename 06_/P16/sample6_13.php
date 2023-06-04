<?php

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
     *  メソッド：挨拶
     * 　   お世話になります。「社名」の「氏名」です。
     *      （定型句）
     */
    public function introduction(){
        return "お世話になります。".$this->company."の".$this->name."です。";
    }
}

/** ---------------------
 *  クラス：Abc
 *  継承元：Users
 *  --------------------- **/
class Abc extends Users{
    /**
     *  メソッド：（定型句）
     */
    public function xyz(){
        return $this->introduction()."<br> 先日は有難うございました。 <br>";
    }
}

/* -----------------------------------------------------
*   情報カード
*       氏名：鈴木
*       会社：HTML株式会社
* ----------------------------------------------------- */
    $suzuki = new Abc("鈴木","HTML株式会社");
    echo $suzuki->xyz();
?>