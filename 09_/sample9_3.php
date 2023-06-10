<?php

    /**
     *  ファイルの書き込み
     *      ※ 対象ファイルが作成される。
     *  -------------------------------------------
     *      実行後【sample9_4.txt】が作成される
     *          注意：上書きされる
     */

    $file = "sample9_4.txt";
    $string = "HelloWorld";

    file_put_contents($file,$string);
    
?>