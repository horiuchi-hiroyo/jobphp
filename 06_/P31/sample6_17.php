<?php
/** ===== // 　ファイル読み込み形式   // =============
 *  【ファイルが読み込めない場合】
 *      require         「Fatal Error」 その場で終了
 *      require_once    「Fatal Error」 その場で終了
 *          ※ １度読み込んだファイルは再読込不可
 *      include         「warning」     処理は継続
 *      include_once    「warning」     処理は継続  
 *          ※ １度読み込んだファイルは再読込不可
 *  ================================================== */
/** +++++++++++++++++++++++++++
 *      sample6_14.phpを読込
 *　+++++++++++++++++++++++++++ */
include "sample6_14.php";
    $yamada = new Name("山田");
    echo $yamada->Aisatsu();
?>