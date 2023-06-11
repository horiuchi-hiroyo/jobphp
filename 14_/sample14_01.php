<?php
    /**
     *      config.iniファイルを設定ファイルとして読み込む
     *          ファイルレイアウトは、Key = value で記述
     */
    $config = parse_ini_file("config.ini");

    try{
        // DBに接続
        $pdo = new PDO($config["dns"],$config["dbuser"],$config["dbpassword"]);
        $stmt = $pdo->query("SELECT * FROM user ");
    }catch (PDOException $e){
        $e->getMessage();
    }

    //  DB切断
    $pdo = null;    
    //  文字列キーによる配列としてテーブル全行取得
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    //  画面上に「userテーブルに最初に登録されている方の名前が出力される
    echo $users[0]["name"];

?>