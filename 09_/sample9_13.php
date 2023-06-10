<?php

    /** ---------------------------------------
     *      fopen():ファイルを開く
     *      fgets():１行分の文字列を取得する。
     *      fcolse():ファイルを閉じる
     *      file_get_contents():ファイル全体を読み込む
     *      fgetcsv():csvファイルを読み込む
     *      fwite()
     *      file_put_contents():ファイルへの書き込み
     *  ---------------------------------------- */
    // $filename = "sample9_13_2.txt";
    $filename = "sample9_6.txt";
    $fh = file_get_contents($filename,"rb");

    echo " ----------- \r\n";
    echo '$fh -> ';
    var_dump($fh);
    echo " ----------- \r\n";

    echo " file_put_contents() \r\n";
    echo "　同値演算子（===）を利用：";
    if($fh === false){
        echo "Errorが発生しました。";
    }else{
        echo "正常に動作しています。";
    }

    echo "\r\n\r\n";
    echo "　比較演算子（==）を利用：";
    if($fh == false){
        echo "Errorが発生しました。";
    }else{
        echo "正常に動作しています。";
    }

?>