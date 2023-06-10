<?php

    /**
     *  ファイルの書き込み
     *      ※ 対象ファイルが作成される。
     *  -------------------------------------------
     *      実行後【sample9_11.csv】が作成される
     */

     try{
        $pdo = new PDO("mysql:dbname=php_practice;host=localhost;" ,"root" ,"");
        $stmt = $pdo->query("SELECT * FROM user");
    } catch(PDOException $e) {
        $e->getMessage(); 
    }
    
    $fh = fopen("sample9_11.csv","wb");

    while($user = $stmt->fetch(PDO::FETCH_NUM)){
        fputcsv($fh,$user);
    }

    fclose($fh);

?>