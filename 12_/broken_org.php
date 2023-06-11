<?php
    /** + + + — — — — — — — — — — — — — — — — — — — — + + +
     *      実行結果が正しくないコード
     *  + + + — — — — — — — — — — — — — — — — — — — — + + + */
    $prices = array(10,50,100,150);
    $total_price = 0;
    $tax_rate = 1.1;

    foreach($prices as $price){
        $total_price = $price * $tax_rate;
    }

    echo "合計金額は{$total_price}円です。";
?>