<?php
    /* ・－・－・－・－・－・－・－・－・－・－・
     *      全てのセッションを削除する
     * ・－・－・－・－・－・－・－・－・－・－・ */

    session_start();
    $_SESSION['name'] = "山田太郎";
    $_SESSION['mail'] = "yamada@sakura.co.jp";

    echo $_SESSION['name'];
    echo $_SESSION['mail'];

    //  session_destroy();  
?>