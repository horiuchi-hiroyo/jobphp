<?php
    //      4章 7
    /* ------------------------------------------------
     *   次のコードのforeach文をfor文で書き直した場合、
     *      同じ結果になるものを選択してください。（１つ選択）
     * ------------------------------------------------ */
    /* ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
     *   foreach文とfor文の使い方
     * ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ */

    $fruits = array(1 => 'apple',
                    2 => 'banana',
                    3 => 'lemon',
                    4 => 'orange');

    foreach($fruits as $key => $value){
        print " {$key} {$value}";
    }

    // 配列の個数を取得
    $n = count($fruits);
    print "\n\r".'$n = '.$n."\n\r";

    print ("\n\r -- A ----------- \n\r ");
    // 0 ～ 4　・・・　Key 0　は対象無。
    // $n = count($fruits);
    // for($i = 0; $i <= $n; $i++){
    //     print " {$i} {$fruits[$i]}";
    // }

    print ("\n\r -- B ----------- \n\r ");
    $n = count($fruits);
    for($i = 1; $i <= $n; $i++){
        print " {$i} {$fruits[$i]}";
    }

    print ("\n\r -- C ----------- \n\r ");
    // 0 ～ 4　・・・　Key 0　は対象無。
    // $n = count($fruits);
    // for($i = 0; $i < $n; $i++){
    //     print " {$i} {$fruits[$i]}";
    // }

    print ("\n\r -- D ----------- \n\r ");
    $n = count($fruits);
    for($i = 1; $i < $n; $i++){
        print " {$i} {$fruits[$i]}";
    }

?>