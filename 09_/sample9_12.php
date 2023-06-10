<?php

    /**
     *  ファイルのダウンロード
     */
    try{
        $pdo = new PDO("mysql:dbname=php_practice;host=localhost;" ,"root" ,"");
        $stmt = $pdo->query("SELECT * FROM user");
    } catch(PDOException $e) {
        $e->getMessage(); 
    }
    
    // HTTPヘッダーを設定
    /**
     *      Webブラウザに「users.csv」ファイルのダウンロード通知をしているため、
     *      ブラウザ処理が必要
     */
    header("Content-Type:text/csv");
    header('Content-Disposition:attachment; filename="users.csv"');

    /**
     *  fopen():ダウンロードする場合は、
     *      引数１：「php://output」にて固定
     */
    $fh = fopen("php://output","wb");

    while($user = $stmt->fetch(PDO::FETCH_NUM)){
        fputcsv($fh,$user);
    }

    fclose($fh);

?>