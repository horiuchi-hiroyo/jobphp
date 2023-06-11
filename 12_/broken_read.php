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
    /**
     *      配列：$prices[] の内容を 順次読み込む
     * 
     *  $prices[0] = 10
     *      $total_price = $price * $tax_rate;
     *     （ 代入する ）=   10 * 1.1
     *      $total_price = 　11
     *  -------------------------------------------
     *  $prices[0] = 50
     *      $total_price = $price * $tax_rate;
     *     （ 代入する ）=   50 * 1.1
     *      $total_price = 　55
     *  -------------------------------------------
     *  $prices[0] = 100
     *      $total_price = $price * $tax_rate;
     *     （ 代入する ）=   100 * 1.1
     *      $total_price = 　110
     *  -------------------------------------------
     *  $prices[0] = 150
     *      $total_price = $price * $tax_rate;
     *     （ 代入する ）=   150 * 1.1
     *      $total_price = 　165
     *  -------------------------------------------
     *  ※ $total_price は、
     * 　　配列内容を計算の都度【上書き】されている為、
     *      最後の計算結果が表示されている
     */

    echo "合計金額は{$total_price}円です。";
?>