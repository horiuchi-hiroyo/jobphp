<?php

    require "sample6_39.php";

    \space1\Greet::greeting();

    /**
     *  名前空間の指定なしで指示すると・・・
     *  自ファイル内で解決しようとするため、（該当クラスが無い）
     *  エラーになる
     */
?>