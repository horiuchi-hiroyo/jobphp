<?php
    $pramas = array("zipcode" => "7810112");

    $url = "http://zipcloud.ibsnet.co.jp/api/search?".http_build_query($pramas);
    $json = file_get_contents($url);
    $arr = json_decode($json,true);

    echo '$arr'." ->> <pre>";
    var_dump($arr);
    echo "</pre><hr>";

    $prefecture = $arr["results"][0]["address1"];
    $city  = $arr["results"][0]["address2"];
    $city2 = $arr["results"][0]["address3"];
    $prefectureKana = $arr["results"][0]["kana1"];
    $cityKana = $arr["results"][0]["kana2"];
    $city2Kana = $arr["results"][0]["kana3"];
    $zipcode = $arr["results"][0]["zipcode"];

    echo $zipcode."<br>";
    echo $prefecture.$city.$city2."<br>";
    echo $prefectureKana.$cityKana.$city2Kana."<br>";
?>
<!--
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

?> -->