<?php
    // 復習
    session_start();
    $_SESSION['name'] = "源義経";

    unset($_SESSION['name']);

    echo $_SESSION['name'];

?>