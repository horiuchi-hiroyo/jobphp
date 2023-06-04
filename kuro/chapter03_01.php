<?php
    //      3章 1
    /* ------------------------------------------------
     *   次のうち true となるものを
     *       選択してください（３つ選択）
     * ------------------------------------------------ */
    /* ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
     *      【 false 】になる
     *  ・「0」（整数）・「0.0」（浮動小数点）
     *  ・「」（=空）の文字列
     *  ・「0」（ゼロ）だけを含む文字列
     * ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ */

    $a = 'abc';
    $b = 0;
    $c = 0.0;
    $d = 40;
    $e = 'phptest'.'@example.com';
    $f = 4-7+3;

    // －－ 追加 －－－－－－－－－－－－－   //
    $g = 0.1;       //  浮動小数点（0.0以外は true ）
    $h = "";        //  空の文字列
    $i = "0";       //  ゼロだけの文字列

    echo "\r\n".$a. " = ";
    if($a){
        echo "true";
    }else{
        echo "false";
    }

    echo "\r\n".$b. " = ";
    if($b){
        echo "true";
    }else{
        echo "false";
    }

    echo "\r\n".$c. " = ";
    if($c){
        echo "true";
    }else{
        echo "false";
    }

    echo "\r\n".$d. " = ";
    if($d){
        echo "true";
    }else{
        echo "false";
    }

    echo "\r\n".$e. " = ";
    if($e){
        echo "true";
    }else{
        echo "false";
    }

    echo "\r\n".$f. " = ";
    if($f){
        echo "true";
    }else{
        echo "false";
    }

    echo "\r\n ********************* ";

    echo "\r\n".$g. " = ";
    if($g){
        echo "true";
    }else{
        echo "false";
    }

    echo "\r\n".$h. " = ";
    if($h){
        echo "true";
    }else{
        echo "false";
    }

    echo "\r\n".$i. " = ";
    if($i){
        echo "true";
    }else{
        echo "false";
    }

    echo "\r\n";
?>