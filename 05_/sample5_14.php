<?php
    $num = 10;      //  グローバル変数

    function sample(){
        $num = 20;  //  ローカル変数
    }

    sample();
    echo $num;
    
?>