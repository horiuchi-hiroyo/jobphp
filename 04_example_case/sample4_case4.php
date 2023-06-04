<?php
    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      配列操作（関数）
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    $colors = array("sun" => "red",             //  太陽
                    "sky" => "blue",            //  空
                    "cloud" => "white",         //  雲
                    "night" => "black",         //  夜
                    "bee" => "yellow");         //  蜂

    print "\n\r *-*- 【 foreach 】 -*-*-*-*-*-*-*-*-* \n\r";
    foreach($colors as $key => $value){
        print "{$key} : {$value} \n\r";
    }; 
                
    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      count($XXX);
     *   ・・・要素の数を返す
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    print "\n\r"."\n\r".'*-*- count($変数) -*-*-*-*-*-*-*-*-*'."\n\r";
    print count($colors);

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      explode($d , $str);
     * 　・・・　文字列$str を$dで区切って、配列として返す
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    print "\n\r"."\n\r".'*-*- explode($d,$str) -*-*-*-*-*-*-*-*-*'."\n\r";
    $fruits = "リンゴ/ぶどう/桃";
    $array = explode("/",$fruits);
    var_dump($array);

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      implode($d,$array);
     * 　・・・　配列$arrayを文字列$dで連結して、文字列として返す
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    print "\n\r"."\n\r".'*-*- implode($d,$array) -*-*-*-*-*-*-*-*-*'."\n\r";
    print implode(" + ",$colors);

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      unset($array[$key]);
     * 　・・・　配列$arrayのキーが $Key の者を削除する
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    print "\n\r"."\n\r".'*-*- unset($array[$key]) -*-*-*-*-*-*-*-*-*'."\n\r";
    unset($array[1]);
    var_dump($array);

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      in_array($val,$array);
     * 　・・・　配列$arrayに値$val があれば「True(= 1)」を返す
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    print "\n\r"."\n\r".'*-*- in_array($val,$array) -*-*-*-*-*-*-*-*-*'."\n\r";
    print in_array("red",$colors);

    if(in_array("red",$colors)){
        print "true";
    }else{
        print "False";
    }

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      array_key_exists($key,$array);
     * 　・・・　配列$arrayにキー$key があれば「True(= 1)」を返す
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    print "\n\r"."\n\r".'*-*- array_key_exists($key,$array) -*-*-*-*-*-*-*-*-*'."\n\r";
    print array_key_exists("sun",$colors);

    if(array_key_exists("sky",$colors)){
        print "true";
    }else{
        print "False";
    }

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      array_search($val,$array);
     * 　・・・　配列$arrayから値$valを検索し、それに対応するキーを返す
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    print "\n\r"."\n\r".'*-*- array_search($val,$array) -*-*-*-*-*-*-*-*-*'."\n\r";
    print array_search("blue",$colors)."/";

?>