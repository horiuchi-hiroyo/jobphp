<?php
    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      配列への格納（通常）
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    $colors = array("sun" => "red",             //  太陽
                    "sky" => "blue",            //  空
                    "cloud" => "white",         //  雲
                    "night" => "black",         //  夜
                    "bee" => "yellow");         //  蜂

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      配列内容の表示（そのまま）
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    print "\n\r *-*- foreach [key:value] -*-*-*-*-*-*-*-*-* \n\r";
    foreach($colors as $key => $value){
        print "{$key} : {$value} \n\r";
    }

    /* ━━…━━…━━…━━…━━…━━…━━…━━…━━…━━…━━…━━
     *  配列格納　→　ソート（sort／rsort）は新たな配列となるため、
     *  オリジナル配列をソートするなら、オリジナルに戻すこと！
     * ━━…━━…━━…━━…━━…━━…━━…━━…━━…━━…━━…━━ */

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *  値を並べ替え
     *  　　配列に再格納（Keyを振りなおす）
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    /*      sort($変数)・・・　昇順     */
    sort($colors);
    print "\n\r *-*- 【 sort 】 -*-*-*-*-*-*-*-*-* \n\r";
    foreach($colors as $key => $value){
        print "{$key} : {$value} \n\r";
    }

    /*      rsort($変数)・・・　降順    */
    rsort($colors);     
    print "\n\r *-*- 【 rsort 】 -*-*-*-*-*-*-*-*-* \n\r";
    foreach($colors as $key => $value){
        print "{$key} : {$value} \n\r";
    }

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *  キーと値の関係を保持して並べ替え
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    /*      asort($変数)・・・　昇順     */
    asort($colors);
    print "\n\r *-*- 【 asort 】 -*-*-*-*-*-*-*-*-* \n\r";
    foreach($colors as $key => $value){
        print "{$key} : {$value} \n\r";
    }

    /*      arsort($変数)・・・　降順     */
    arsort($colors);
    print "\n\r *-*- 【 arsort 】 -*-*-*-*-*-*-*-*-* \n\r";
    foreach($colors as $key => $value){
        print "{$key} : {$value} \n\r";
    }

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *  キーと値の関係を保持して並べ替え
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    /*      ksort($変数)・・・　昇順     */
    ksort($colors);
    print "\n\r *-*- 【 ksort 】 -*-*-*-*-*-*-*-*-* \n\r";
    foreach($colors as $key => $value){
        print "{$key} : {$value} \n\r";
    }

    /*      krsort($変数)・・・　降順     */
    krsort($colors);
    print "\n\r *-*- 【 krsort 】 -*-*-*-*-*-*-*-*-* \n\r";
    foreach($colors as $key => $value){
        print "{$key} : {$value} \n\r";
    } 
?>