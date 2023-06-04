<?php
    /*  ◆◇------------------------------◇◆
     *      （商品価格 * 消費税率）+　送料
     *  ◆◇------------------------------◇◆ */ 

    $mikan = (300 * 1.08) + 350;
    $ringo = (450 * 1.08) + 350;
    $ichigo = (550 * 1.08) + 350;
    $nashi = (350 * 1.08) + 350;

    //  関数を利用(sample5_1.php)
    function totalPrice($fruitprice,$tax=1.08,$haiso=350){
        return($fruitprice * $tax) + $haiso;
    }


?>