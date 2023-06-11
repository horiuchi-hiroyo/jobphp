<?php 

    $text_en = "text";
    $text_ja = "テキスト";

    /**
     *      strlen()：バイト数を求める
     */
    echo "\r\n strlen() \r\n";
    echo '$text_en'." : ".strlen($text_en);
    echo "\r\n";
    echo '$text_ja'." : ".strlen($text_ja);
    echo "\r\n";

    /**
     *      mb_strlen()：単純な文字数を求める
     */
    echo "\r\n mb_strlen() \r\n";
    echo '$text_en'." : ".mb_strlen($text_en);
    echo "\r\n";
    echo '$text_ja'." : ".mb_strlen($text_ja);

?>