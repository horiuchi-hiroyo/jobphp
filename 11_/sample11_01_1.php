<?php
    /**
     *      APIの利用
     */
    $pramas = array("zipcode" => "7810112");

    $url = "http://zipcloud.ibsnet.co.jp/api/search?".http_build_query($pramas);
    $json = file_get_contents($url);
    $arr = json_decode($json,true);

    /** +++++++++++++++++++++++++++
     *      file_get_contents()
     *          APIへ簡易アクセス
     *          ファイルの内容を全て文字列に読み込む（失敗したら：false）
     *      ---------------------
     *      json_decode()
     *          JSON エンコードされた文字列を PHP の値に変換する
     *   +++++++++++++++++++++++++++ */
    echo '$arr'." ->> ";
    var_dump($url);
    echo "<hr>";

    echo '$json'." ->> <pre>";
    var_dump($json);
    echo "</pre>";
    echo "<hr>";

    echo '$arr'." ->> <pre>";
    var_dump($arr);
    echo "</pre>";
?>