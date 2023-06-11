<?php
    /** + + + — — — — — — — — — — — — — — — — — — — — + + +
     *      実行結果が正しくないコード
     *          経過を「echo」で表示
     *  + + + — — — — — — — — — — — — — — — — — — — — + + + */
    $prices = array(10,50,100,150);
    $total_price = 0;
    $tax_rate = 1.1;

    foreach($prices as $price){
        echo "[合計金額（計算前）：$total_price ] <br>";
        $total_price = $price * $tax_rate;
        echo "[合計金額（計算後）：$total_price ] <br><hr>";
    }

    echo "合計金額は{$total_price}円です。";
?>