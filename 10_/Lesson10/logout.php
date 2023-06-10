<?php
    session_start();
    /** ---------------------------------------
     *      セッション変数をすべて解除する
     *  --------------------------------------- */
    $_SESSION = array();

    if(isset($_COOKIE["session_name()"])){
        // sessionIDの解除
        setcookie("session_name()","",time()-1800,"/");
    }

    session_destory();

    header("Location:login.php");
?>