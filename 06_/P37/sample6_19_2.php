<?php
/** +++++++++++++++++++++++++++
 *      sample6_20.phpを読込
 *　+++++++++++++++++++++++++++ */
    require "sample6_20.php";

    $yamada = new Name("山田");
    echo $yamada->Aisatsu();

    //-- プロパティ（name）を参照してみよう！！ --//
    //echo "\r\n 名前を表示：".$yamada->name;
    /**
     * Fatal error: Uncaught Error: Cannot access private property Name::$name in
     *  C:\xampp\htdocs\php_202304\06_\sample6_19.php:11
     *  Stack trace:
     *  #0 {main}
     *   thrown in C:\xampp\htdocs\php_202304\06_\sample6_19.php on line 11
     */

    //-- プロパティ（name）を「public」にすると… --//
    // echo "\r\n 名前を表示：".$yamada->name;     //  ←　処理ができるということは…
    // $yamada->name = "堀内";
    // echo $yamada->Aisatsu();
?>