<?php
    //      4章 9
    /* ------------------------------------------------
     *   var_dump()関数を実行すると次のように表示される
     *      ２次元配列があります。文字列Tokyoを表示するための記述として
     *      正しいものを選択してください。（１つ選択）
     * ------------------------------------------------ */
    /* ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
     *   
     * ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ */

    $profiles = array(
        array(
            'name' => "Yamada",
            'age' => 24,
            'country' => "Osaka",
        ),
        array(
            'name' => "Tanaka",
            'age' => 32,
            'country' => "Tokyo",
        ),
        array(
            'name' => "Ikeda",
            'age' => 27,
            'country' => "Kyoto",
        ),
    );

    print " ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ \n\r";
    print var_dump($profiles);
    print " ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ \n\r";

    print "A:".$profiles['country']."\n\r";     //  指定要素不足
    print "B:".$profiles[2][3]."\n\r";          //  ２つ目の要素の指定NG（文字列keyが正）
    print "C:".$profiles[1][2]."\n\r";          //  ２つ目の要素の指定NG（文字列keyが正）
    print "D:".$profiles[1]['country']."\n\r";  //  正解
    print "E:".$profiles[0]['country']."\n\r";  //  対象が異なる
    print "F:".$profiles[3]['Tokyo']."\n\r";    //  'Tokyo'要素なし

?>