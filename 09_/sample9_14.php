<?php
    /** ---------------------------------------
     *      fopen():ファイルを開く
     *      fgets():１行分の文字列を取得する。
     *      fcolse():ファイルを閉じる
     *      file_get_contents():ファイル全体を読み込む
     *      fgetcsv():csvファイルを読み込む
     *      fwite()
     *      file_put_contents():ファイルへの書き込み
     *          ERRになる場合…ファイルがロックされている（読み取り専用にして実行すると…）
     *                      　メモリ不足
     *  ---------------------------------------- */
    $file = "sample9_15.txt";
    $string = "HelloWorld";

    $result = file_put_contents($file,$string);

    echo " ----------- \r\n";
    echo '$result -> ';
    var_dump($result);
    echo " ----------- \r\n";

    echo " file_put_contents() \r\n";
    if(($result === false) || ($result == -1)){
        echo "Errorが発生しました。";
    }else{
        echo $file."が正常に作成されました。";
    }

?>