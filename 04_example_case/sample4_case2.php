<?php
    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      配列への格納（通常）
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    $festival = array("花火大会","よさこい祭","どろんこ祭");

    echo '$festival[0] -> '.$festival[0]."\r\n";
    echo '$festival[1] -> '.$festival[1]."\r\n";
    echo '$festival[2] -> '.$festival[2]."\r\n";
    echo "\r\n";

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *      配列への格納（連想配列）
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    $festival2 = array( "いの"=>"花火大会",
                        "高知市"=>"よさこい祭",
                        "長浜"=>"どろんこ祭",
                    );

    echo '$festival2["いの"] -> '.$festival2["いの"]."\r\n";
    echo '$festival2["高知市"] -> '.$festival2["高知市"]."\r\n";
    echo '$festival2["長浜"] -> '.$festival2["長浜"]."\r\n";
    echo "\r\n";

    echo "\r\n  key を数値で指示した場合 \r\n";     //      ERR???
    echo '$festival2[0] -> '.$festival2[0]."\r\n";
    echo '$festival2[1] -> '.$festival2[1]."\r\n";
    echo '$festival2[2] -> '.$festival2[2]."\r\n";
    echo "\r\n";



     /* ◇◆－－－－－－－－－－－－－－－－◆◇
     *      配列操作
     *      １．要素の追加
     *      ２．既存の値を更新
     *      ３．要素の削除
     * ◇◆－－－－－－－－－－－－－－－－◆◇ */


?>