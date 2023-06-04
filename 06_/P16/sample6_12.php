<?php
// クイズ４ //
class Person{
    // プロパティ（クラス内の変数）
    public $name;
    public $birth;

    /**
     *  コンストラクタ
     */
    public function __construct($name,$birth){
        $this->name = $name;
        $this->birth = $birth;
    }

    /**
     *  メソッド：紹介
     * 　   氏名
     *      誕生日：XXXX年XX月XX日
     */
    public function introduction(){
        return $this->name."<br>誕生日：".$this->birth;
    }
}

/** ---------------------
 *  クラス：Person_sub
 *  継承元：Person
 *  --------------------- **/
class Person_sub extends Person{
    /**
     *  メソッド：区切り
     */
    public function line(){
        return "<br> ========================= <br>";
    }
}

/* -----------------------------------------------------
*   個人情報（１）
*       氏名：山田太郎
*       誕生日：1990年3月5日
* ----------------------------------------------------- */
    $yamada = new Person("山田太郎","1990年3月5日");
    echo $yamada->introduction();
    echo "<br><br>";

/* -----------------------------------------------------
*   個人情報（２）
*       氏名：佐藤太郎
*       誕生日：1991年7月2日
* ----------------------------------------------------- */
    $sato = new Person_sub("佐藤太郎","1991年7月2日");
    echo $sato->introduction();
    echo $sato->line();
?>