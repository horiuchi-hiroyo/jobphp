<?php
    /*
     *  宇宙船（<=>）演算子
     *      左が小さい  「-1」      TRUE
     *      左が大きい  「1」       TRUE
     *      左右が同じ  「0」       FALSE
     */

    $checkNum = 10;

    //  --  左が小さい  --
    $num1 = 5;
    echo "「".$num1."」判定：".($num1 <=> $checkNum)."\r\n";
    if($num1 <=> $checkNum){
        echo "TRUE：".($num1 <=> $checkNum)."\r\n";
    }else{
        echo "FALSE：".($num1 <=> $checkNum)."\r\n";
    }

    echo "\r\n";

    //  --  左が大きい  --
    $num2 = 15;
    echo "「".$num2."」判定：".($num2 <=> $checkNum)."\r\n";
    if($num2 <=> $checkNum){
        echo "TRUE：".($num2 <=> $checkNum)."\r\n";
    }else{
        echo "FALSE：".($num2 <=> $checkNum)."\r\n";
    }

    echo "\r\n";

    //  --  左右が同じ  --
    $num3 = $checkNum;
    echo "「".$num3."」判定：".($num3 <=> $checkNum)."\r\n";
    if($num3 <=> $checkNum){
        echo "TRUE：".($num3 <=> $checkNum)."\r\n";
    }else{
        echo "FALSE：".($num3 <=> $checkNum)."\r\n";
    }
?>