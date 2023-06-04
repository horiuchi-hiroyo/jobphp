<?php

class Users{
    public $name;
    public $company;

    public function __construct($name,$company){
        $this->name = $name;
        $this->company = $company;
    }

    public function introdction(){
        return "お世話になります。".$this->company."の".$this->name."です。";
    }
}

$yamada = new Users("山田","ABC株式会社");
/** introdction()は、「public」どこからでも参照可 */
echo $yamada->introdction()."\r\n ---- \r\n";

/**
 *  Usersクラスのプロパティの設定されたアクセス権により
 * 　処理の可／不可が変わる！
 */
echo $yamada->name."\r\n";
echo $yamada->company."\r\n";

?>