<?php

    /**
     *  ファイルの読み込み
     *      既存ファイルを読み込み
     *      ※ 対象ファイルが無い場合はERRになる。
     *  -------------------------------------------
     *  　Warning: file_get_contents(sample9_02.txt): 
     *      Failed to open stream: No such file or directory in
     *      C:\xampp\htdocs\php_202304\09_\sample9_1.php on line 8
     *  -------------------------------------------
     *      【sample9_2.txt】を作成して、実行
     */

    $file = file_get_contents("sample9_2.txt");
    echo $file;

?>