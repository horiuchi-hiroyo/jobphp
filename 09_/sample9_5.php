<?php

    /**
     *  ファイル操作
     *      ※ 対象ファイルが無い場合 ERR
     *  -------------------------------------------
     *  Warning: file(sample9_7.txt): Failed to open stream: No such file or directory in
     *   C:\xampp\htdocs\php_202304\09_\sample9_5.php on line 14
     * 
     *  Warning: foreach() argument must be of type array|object, bool given in
     *   C:\xampp\htdocs\php_202304\09_\sample9_5.php on line 14
     *  -------------------------------------------
     *      【sample9_6.txt】を作成して、実行
     */

    foreach(file("sample9_6.txt") as $line){
        $line = trim($line);
        $info = explode("|",$line);
        echo "<li><a href='mailto:{$info[0]}'>{$info[1]}</a></li>";
    }

    echo "\r\n\r\n -- （配列内容の確認用） -- \r\n";
    /**
     *      配列内容の確認（補足）
     */
    foreach(file("sample9_6.txt") as $line2){   // １行を取得（改行を含む文字列）
        $lineEdit = trim($line2);               
        $info2 = explode("|",$lineEdit);        //  https://www.php.net/manual/ja/function.explode.php

        // 配列内容確認 //
        // echo "\r\n \r\n ======================= \r\n";
        // echo "\r\n ---- ---- \r\n".'$line2';
        // var_dump($line2);
    
        // echo " ---- \r\n".'$lineEdit';      //  trim() ：先頭・末尾のスペースを取り除く
        // var_dump($lineEdit);
    
        // echo " ---- \r\n".'$info2';         //　explode()： 引数１の文字列で、引数２の文字列を分割する
        // var_dump($info2);

        // echo " ---- \r\n";
        echo "<li><a href='mailto:{$info2[0]}'>{$info2[1]}</a></li>";
    }

?>