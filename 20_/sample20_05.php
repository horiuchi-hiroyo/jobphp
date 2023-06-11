<?php

    $text_jp = "テキスト";

    $textConv = mb_convert_encoding($text_jp,"SJIS");
    // $text_jpの文字コードを「UTF-8」→「Shift_JIS」に変換

    echo $text_jp;
    echo "<hr>";
    echo $textConv;
?>