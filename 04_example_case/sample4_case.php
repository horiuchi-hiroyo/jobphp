<?php
    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *  配列格納　１
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    $name1[0] = "田中";
    $name1[1] = "高橋";
    $name1[2] = "斉藤";

    echo '$name1[0] -> '.$name1[0]."\r\n";

    /* ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞
     *  配列格納　２
     * ∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞━━━━━━━━━∞∞ */
    $name2 = array("田中","高橋","斉藤");

    echo '$name2[0] -> '.$name2[0]."\r\n";

    /* ◇◆－－－－－－－－－－－－－－－－◆◇
     *      配列操作
     *      １．要素の追加
     *      ２．既存の値を更新
     *      ３．要素の削除
     * ◇◆－－－－－－－－－－－－－－－－◆◇ */

    //   １．要素の追加
    $name1[3] = "佐藤";
    $name2[] = "佐藤";

    echo "\r\n";
    echo '$name1[3] -> '.$name1[3]."\r\n";
    echo '$name2[3] -> '.$name2[3]."\r\n";

    //   ２．既存の値を更新
    $name1[0] = "加藤";
    $name2[0] = "加藤";

    echo "\r\n";
    echo '$name1[0] -> '.$name1[0]."\r\n";
    echo '$name2[0] -> '.$name2[0]."\r\n";

    //   ３．要素の削除
    //      削除された要素はWarningErr
    //      （ワーニングエラー：注意）
    unset($name1[1]);
    unset($name2[1]);

    echo "\r\n";
    echo '$name1[1] -> '.$name1[1]."\r\n";
    echo '$name2[1] -> '.$name2[1]."\r\n";

?>