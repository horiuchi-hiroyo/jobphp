<?php
    //      3章 5
    /* ------------------------------------------------
     *   次のコードを実行した結果として
     *       正しいものを選択してください（１つ選択）
     * ------------------------------------------------ */
    /* ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
     *  文字列の先頭が数値の場合、
     *  -------------------------
     *  バージョンによって結果が異なる
     *      PHP7.4以前  先頭の数値と比較            true
     *      PHP8以降    文字列として比較（辞書順）  false
     * ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ */

    if('5member' < 44){
        print "44";
    }else{
        print "5member";
    }
?>