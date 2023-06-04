<?php
    /* ・－・－・－・－・－・－・－・－・－・－・
     *      同じファイル内で出力する
     * ・－・－・－・－・－・－・－・－・－・－・ */

    session_start();

    $_SESSION['name'] = "山田太郎";

    echo $_SESSION['name'];
?>