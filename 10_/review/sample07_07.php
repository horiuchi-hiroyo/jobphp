<?php
    // 復習
    session_start();
    $_SESSION['name'] = "山田太郎";
    $_SESSION['mail'] = "yamada@sakura.co.jp";

    echo $_SESSION['name'];
    echo $_SESSION['mail'];

    session_destroy();
?>