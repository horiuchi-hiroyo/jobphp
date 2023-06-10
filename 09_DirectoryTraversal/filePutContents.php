<?php

    // echo '$_POST：';
    // var_dump($_POST);
    $filename = $_POST["filename"];
    // var_dump($filename);
    // echo "\r\n ------- \r\n";

    /**
     *  ファイルのダウンロード
     */
     
    // HTTPヘッダーを設定
    /**
     *      Webブラウザに「users2.csv」ファイルのダウンロード通知をしているため、
     *      ブラウザ処理が必要
     */
    header("Content-Type:text/csv");
    header("Content-Disposition:attachment; filename = $filename");

    /**
     *  fopen():ダウンロードする場合は、
     *      引数１：「php://output」にて固定
     */
    $fh_put = fopen("php://output","wb");
        $fh = fopen($filename,"rb");  //  1)ファイルを開く

        /** --------------------------------------
         *   feof()：ファイルポインタが終点にある場合「true」を返す
         *   fgets()：１行分の文字列を取得する
         ** -------------------------------------- */
        while(!feof($fh) && ($line = fgets($fh))){
            $line = trim($line);
            echo $line."\r\n";
        }

        fclose($fh);                        //  ３）ファイルを閉じる
    fclose($fh_put);

?>