<?php
    /**
     *      問２）<form>タグのaction属性で、フォーム要求の際に使用されたURLと同じものを
     *          指定するための記述として正しいものを選択してください。（１つ選択）
     *  ----------------------------------------------
     * $_GET/$_POST     ファイル間のデータやり取り
     * $_SESSION        複数回のアクセスを通じて特定のデータを保持する
     *      （ 該当要素無し ）
     * 【 https://www.php.net/manual/ja/reserved.variables.server.php 】
     * 'PHP_SELF'    現在実行しているスクリプトのファイル名です。
     */
    var_dump($_GET['PHP_URL']);
    echo "(A)<hr>";
    var_dump($_POST['PHP_SELF']);
    echo "(B)<hr>";
    var_dump($_SESSION['PHP_URL']);
    echo "(C)<hr>";
    var_dump($_SERVER['PHP_SELF']);
    echo "(D)<hr>";

    /**
     *      問３）Webサーバとクライアント間のリクエストに関する情報を確認します。
     *          クライアントのIPアドレスを確認するためのサーバ変数の要素として
     *          正しいものを選択してください。（１つ選択）     * 
     *  ----------------------------------------------
     * 【 https://www.php.net/manual/ja/reserved.variables.server.php 】
     * 'REMOTE_ADDR'    現在ページをみているユーザーの IP アドレス。
     * 'REMOTE_HOST'    現在のページにアクセスしているホスト名。
     *                  DNS の逆引き検索は ユーザーの REMOTE_ADDR に基づいています。
     * 'REMOTE_PORT'    ユーザーのマシンから Web サーバーへの通信に使用されているポート番号
     * 'REMOTE_USER'    認証されたユーザー。
     */
    echo "<br> =========== <br>";
    echo "REMOTE_PORT : ".$_SERVER['REMOTE_PORT']."<br>";
    echo "REMOTE_ADDR : ".$_SERVER['REMOTE_ADDR']."<br>";
    echo "REMOTE_HOST : ".$_SERVER['REMOTE_HOST']."<br>";
    echo "REMOTE_USER : ".$_SERVER['REMOTE_USER']."<br>";
    echo "<br> =========== <br>";

    /**
     *      問４）以下のフォームパラメータからテキストボックスに入力された値を
     *          取り出すための記述として正しいものを選択してください。（１つ選択）
     *          資料：chapter07_04.html
     */
    //  GET通信してる為、変数は「$_GET」
    echo "A.".$_POST['name']."\r\n";
    echo "B.".$_SERVER['text']."\r\n";
    echo "C.".$_GET['name']."\r\n";
    echo "D.".$_SESSION['text']."\r\n";

    /**
     * Warning: Undefined array key "name" in C:\xampp\htdocs\php_202304\kuro\sample.php on line 2
     *  A.
     * Warning: Undefined array key "text" in C:\xampp\htdocs\php_202304\kuro\sample.php on line 3
     *  B.
     *  C.堀内 啓代
     * Warning: Undefined global variable $_SESSION in C:\xampp\htdocs\php_202304\kuro\sample.php on line 5
     * Warning: Trying to access array offset on value of type null in C:\xampp\htdocs\php_202304\kuro\sample.php on line 5
     *  D.
     */

?>