<?php
    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      配列操作（関数）
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    $colors = array(0 => "red",    
                    1 => "blue",    
                    2 => "white",  
                    3 => "black",  
                    4 => "yellow");

    print "\n\r *-*- 【 foreach 】 -*-*-*-*-*-*-*-*-* \n\r";
    foreach($colors as $key => $value){
        print "{$key} : {$value} \n\r";
    }; 

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      array_splice($array,対象の要素番号,インデックス,置換／追加);
     * 　・・・　配列の一部を削除、置換、また任意の位置に要素を追加できる
     * 　　-----------------------------------------------------------
     *      置換：array_splice($array,1,1,"abc");
     *            ・・・要素番号「１」から「１」番目の値を"abc"に置換
     * 　　-----------------------------------------------------------
     *      追加：array_splice($array,1,0,"abc"); 
     *            ・・・要素番号「１」から「0」番目に"abc"を追加
     * 　　-----------------------------------------------------------
     *      削除：array_splice($array,1,1);
     *            ・・・要素番号「１」から「１」つを削除
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */

    /*  ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ 
     *      置換：array_splice($array,1,1,"abc");
     *            ・・・要素番号「１」から「１」番目の値を"abc"に置換
     *  ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    array_splice($colors,1,1,"green");
    print "\n\r"."\n\r".'*-*- array_splice($colors,1,1,"green") -*-*-*-*-*-*-*-*-*'."\n\r";
    foreach($colors as $key => $value){
        print " $key : $value \n\r";
    }

    /*  ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ 
     *      追加：array_splice($array,1,0,"abc"); 
     *            ・・・要素番号「１」から「0」番目に"abc"を追加
     *  ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    array_splice($colors,1,0,"gray");
    print "\n\r"."\n\r".'*-*- array_splice($colors,1,0,"gray") -*-*-*-*-*-*-*-*-*'."\n\r";
    foreach($colors as $key => $value){
        print " $key : $value \n\r";
    }

    /*  ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ 
     *      削除：array_splice($array,1,1);
     *            ・・・要素番号「１」から「１」つを削除
     *  ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    array_splice($colors,1,1);
    print "\n\r"."\n\r".'*-*- array_splice($colors,1,1) -*-*-*-*-*-*-*-*-*'."\n\r";
    foreach($colors as $key => $value){
        print " $key : $value \n\r";
    }
?>