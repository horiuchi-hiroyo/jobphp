<?php
/**
 *  sample6_13.php のコードを編集
 */
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
     *  メソッド：
     *      親クラスの「introduction()メソッド」を子クラスで上書き
     */
    public function introduction(){
        return "こんにちは。".$this->company."所属の".$this->name."と申します。";
    }
}

/* -----------------------------------------------------
*   情報カード
*       氏名：鈴木
*       会社：HTML株式会社
* ----------------------------------------------------- */
    // 【 Users 】クラスでインスタンス化
    $suzuki = new Users("鈴木","HTML株式会社");
    echo $suzuki->introduction();

    echo "<br>";

    // 【 Abc 】クラスでインスタンス化
    $suzuki = new Abc("鈴木","HTML株式会社");
    echo $suzuki->introduction();
    
?>