<?php
    /* ・－・－・－・－・－・－・－・－・－・－・
     *      全てのセッションを削除する
     * ・－・－・－・－・－・－・－・－・－・－・ */

    session_start();
    /*
     *   $_SESSION['name'] = "山田太郎";
     *   $_SESSION['mail'] = "yamada@sakura.co.jp";
     *                                               */

    session_destroy();  

    echo $_SESSION['name'];
    echo $_SESSION['mail'];

?>