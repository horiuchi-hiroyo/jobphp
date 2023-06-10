<?php
    // 復習
    session_start();
    $_SESSION['name'] = "山田太郎";
    $_SESSION['mail'] = "yamada@sakura.co.jp";

    echo $_SESSION['name'];
    echo $_SESSION['mail'];

    echo '<br> SESSION_name -> '.session_name();

    echo '<br><br>== $_SESSION（元） ==<br>';
    var_dump($_SESSION);
    echo "<br>\r\n ------ \r\n<br>";
    echo '<br>== $_COOKIE（元） ==<br>';
    var_dump($_COOKIE);
    echo "<br>\r\n ------ \r\n<br>";

    // セッション変数をクリア
    $_SESSION = array();

    // クッキーにあるセッション情報をクリア
    if(isset($_COOKIE["session_name()"])){
        setcookie("session_name()","",time()-1800,"/");
    }
  
    // セッションの破棄（ファイル削除）
    session_destroy();

    echo '<br><br>== $_SESSION（クリア） ==<br>';
    var_dump($_SESSION);
    echo "<br>\r\n ------ \r\n<br>";
    echo '== $_COOKIE（クリア） ==<br>';
    var_dump($_COOKIE);
    echo "<br>\r\n ------ \r\n<br>";

?>