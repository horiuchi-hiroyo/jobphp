<?php
    //      3章 4
    /* ------------------------------------------------
     *   次のコードを実行した結果として
     *       正しいものを選択してください（１つ選択）
     * ------------------------------------------------ */
    /* ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
     *  abs() : 絶対値
     *  文字列の比較　・・・　辞書順
     * ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ */
    
    if(abs(-100) > abs(-50)){
        print "AAA";
    }

    if("abc" > "xyz"){
        print "BBB";
    }elseif("567" < "890"){
        print "CCC";
    }
?>