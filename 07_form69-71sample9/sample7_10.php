<?php
    /* ・－・－・－・－・－・－・－・－・－・－・
     *      emptyの使用例
     * ・－・－・－・－・－・－・－・－・－・－・ */

    session_start();

    /*
     *    $_SESSION['mail'] = "yamada@sakura.co.jp";
     */

    if(empty($_SESSION['name'])){
        echo "nameは空です。";
    }

    /* ・－・－・－・－・－・－・－・－・－・－・
     *  付録
     * ・－・－・－・－・－・－・－・－・－・－・ */
    function console_log($data){
        echo '<script>';
        echo 'console.log('.json_encode($data).')';
        echo '</script>';
    }
        console_log($_SESSION);    

    session_destroy();

?>