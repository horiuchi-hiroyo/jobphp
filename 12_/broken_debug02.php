<?php
    /** + + + — — — — — — — — — — — — — — — — — — — — + + +
     *      実行結果が正しくないコード
     *          経過を「echo」で表示 ・・・　ブラウザ
     *          「error_log()」・・・　エラーログに送信
     *  + + + — — — — — — — — — — — — — — — — — — — — + + + */
    $prices = array(10,50,100,150);
    $total_price = 0;
    $tax_rate = 1.1;

    foreach($prices as $price){
        error_log("[合計金額（計算前）：$total_price ]");
        $total_price = $price * $tax_rate;
        error_log("[合計金額（計算後）：$total_price ]");
    }

    echo "合計金額は{$total_price}円です。";
?>

<!-- php_error_log ファイルにて

[10-Jun-2023 15:15:08 Europe/Berlin] [合計金額（計算前）：0 ]
[10-Jun-2023 15:15:08 Europe/Berlin] [合計金額（計算後）：11 ]
[10-Jun-2023 15:15:08 Europe/Berlin] [合計金額（計算前）：11 ]
[10-Jun-2023 15:15:08 Europe/Berlin] [合計金額（計算後）：55 ]
[10-Jun-2023 15:15:08 Europe/Berlin] [合計金額（計算前）：55 ]
[10-Jun-2023 15:15:08 Europe/Berlin] [合計金額（計算後）：110 ]
[10-Jun-2023 15:15:08 Europe/Berlin] [合計金額（計算前）：110 ]
[10-Jun-2023 15:15:08 Europe/Berlin] [合計金額（計算後）：165 ]

-->