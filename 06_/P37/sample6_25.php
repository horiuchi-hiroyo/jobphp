<?php

class Users{
    /**
     *      public : どこからでもアクセス可
     *      private：同クラス内からのみ参照可
     *    → protected：継承関係のみ参照可
     * ---------------------------------------
     * Fatal error: Uncaught Error: Cannot access protected property Users::$company in
     *  C:\xampp\htdocs\php_202304\06_\sample6_25.php:33
     * Stack trace:
     * #0 {main}
     *   thrown in C:\xampp\htdocs\php_202304\06_\sample6_25.php on line 33
     */
    public $name;
    protected $company;

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