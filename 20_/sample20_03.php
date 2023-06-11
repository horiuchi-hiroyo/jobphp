<?php 

    $text_en = "text";
    $text_ja = "テキスト";

    /**
     *      substr()：バイト数を求める
     */
    echo "\r\n substr() \r\n";
    echo '$text_en'." : ".substr($text_en,0,3);
    echo "\r\n";
    echo '$text_ja'." : ".substr($text_ja,0,3);
    echo "\r\n";

?>