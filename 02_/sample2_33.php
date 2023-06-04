<?php

    echo "Hello\r\nWorld";      //  \r：復帰　\n：改行
    echo "\n\n";

    echo "Hello\tWorld";        //  \t：タブ
    echo "\n\n";

    echo "Hello\\World";        //  \\：「\」
    echo "\n\n";

    echo "Hello\$World";        //  \$：「$」
    echo "\n\n";

    echo "Hello\"World";        //  \"：「"」
    echo "\n\n";

    /*
     * 文字コード（IMB：ASCII、10 進数、16 進数、8 進数、およびバイナリーの変換表） 
     *  https://www.ibm.com/docs/ja/aix/7.1?topic=adapters-ascii-decimal-hexadecimal-octal-binary-conversion-table
     * 
     */

    echo "\113";                //  8進数による文字コード
    echo "\n\n";

    echo "\x4B";                //  16進数による文字コード
    echo "\n\n";

    echo "<hr>";

    /*
     * キャリッジリターン（CR）
     * 行頭復帰
     * 　意味：次行（改行）の先頭（復帰）へカーソルを移動
     */
    $msg = "horiuchi\r\n勉強中";
    echo nl2br($msg);
    echo "<hr>";

?>