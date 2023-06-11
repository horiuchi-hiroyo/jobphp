<?php
    /**
     *      日にちの差を取得
     *      diff()
     */

    $d1 = new DateTime("2022-07-10");
    $d2 = new DateTime("2022-07-20");

    $diff = $d1->diff($d2);
    
    echo '$d1'.": ".$d1->format("Y-m-d")." ～ ".'$d2'.": ".$d2->format("Y-m-d")." 差は… ";
    echo $diff->d;

?>