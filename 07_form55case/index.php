<?php

    // session_start();
    mb_internal_encoding("utf8");

    /* ・－・－・－・－・－・－・－・－・－・－・
     *  付録
     * ・－・－・－・－・－・－・－・－・－・－・ */
    function console_log($data){
        echo '<script>';
        echo 'console.log('.json_encode($data).')';
        echo '</script>';
    }
        console_log($_SERVER);

    echo '$_SERVER の 配列内容をconsoleに表示';
?>