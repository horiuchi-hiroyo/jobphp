<?php
    /*  ◆◇------------------------------◇◆
     *      （商品価格 * 消費税率）+　送料
     *  ◆◇------------------------------◇◆ */ 

    //  関数を利用(sample5_1.php)
    function totalPrice($fruitprice,$tax=1.08,$haiso=350){
        return ($fruitprice * $tax) + $haiso;
    }

    //  使用方法
    $mikan = totalPrice(300);
    print $mikan."<br>";

    $ringo = totalPrice(450);
    print $ringo."<br>";

    $ichigo = totalPrice(550);
    print $ichigo."<br>";

    $nashi = totalPrice(350);
    print $nashi."<br>";

?>