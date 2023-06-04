<?php
    /*  ◆◇------------------------------◇◆
     *      （商品価格 * 消費税率）+　送料
     *  ◆◇------------------------------◇◆ */ 

    /*  関数を利用
     *      消費税率を　10%に変更 */
    function totalPrice($fruitprice,$tax=1.1,$haiso=350){
        return ($fruitprice * $tax) + $haiso;
    }

    //  使用方法
    $mikan = totalPrice(300);
    print $mikan."<br>\n\r";

    $ringo = totalPrice(450);
    print $ringo."<br>\n\r";

    $ichigo = totalPrice(550);
    print $ichigo."<br>\n\r";

    $nashi = totalPrice(350);
    print $nashi."<br>\n\r";
?>