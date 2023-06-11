<?php
    /** ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥
     *      date_default_timezone_set() 
     *          （スクリプト中の）
     *          日付/時刻関数で 使用されるデフォルトタイムゾーンを設定
     *  -----------------------------------------
     *      【タイムゾーン】
     *      　日本：Asia/Tokyo
     *  ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥ */

    $d = new DateTime();
    echo '$d'."<pre>";
    var_dump($d);
    echo "</pre><hr>";
    /** ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥
     *      -- デフォルト --
     *      object(DateTime)#1 (3) {
     *          ["date"]=>
     *          string(26) "2023-06-11 08:41:12.981389"
     *          ["timezone_type"]=>
     *          int(3)
     *          ["timezone"]=>
     *          string(13) "Europe/Berlin"
     *      }
     *  ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥ */

    date_default_timezone_set("Asia/Tokyo");

    $d2 = new DateTime();
    echo '$d2'."<pre>";
    var_dump($d2);
    echo "</pre><hr>";    
?>