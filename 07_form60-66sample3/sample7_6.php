<?php
    /* ・－・－・－・－・－・－・－・－・－・－・
     *      特定のセッション変数を削除する
     * ・－・－・－・－・－・－・－・－・－・－・ */

    session_start();
    $_SESSION['name'] = "山田太郎でした。";

    unset($_SESSION['name']);
    
    echo $_SESSION['name'];

?>