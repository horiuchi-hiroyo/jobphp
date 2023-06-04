<?php
    /*
     *  浮動小数点の比較
     *      
     */

    $num1 = 8;                      //  整数
    $num2 = (0.1 + 0.7) * 10;       //  浮動小数

    $num2_1 = 0.1;
    $num2_2 = 0.7;
    $num2_3 = 10;

    echo "補足 \r\n";
    echo "(".$num2_1." + ".$num2_2.") = ".($num2_1 + $num2_2)."\r\n";
    echo "(0.1 + 0.7) * 10 = ".($num2_1 + $num2_2) * $num2_3."\r\n";

    echo "\r\n -- チェック -- \r\n";
    echo "誤差 (0と等しい？)\r\n";
    echo $num1." - ".$num2." = ".$num1 - $num2."\r\n";

    if (($num1 - $num2) == 0) {
        echo "誤差なし";
    }else{
        echo "誤差あり";
    }

    echo "\r\n \r\n \r\n -- 絶対値（abs）チェック -- \r\n";
    echo "誤差 (0.1より小さい？) \r\n";
    echo $num1." - ".$num2." = ".abs($num1 - $num2)."\r\n";

    if (abs(($num1 - $num2)) < 0.1) {
        echo "許容範囲内";
    }else{
        echo "許容範囲外";
    }
?>