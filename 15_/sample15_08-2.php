<?php
    /**
     *  指定の値が有効範囲外の場合
     *  例：10月35日　→　（10月31日までのため、11月4日となる）
     *  --------------------------------------------------------
     *    ≪対策≫
     *        checkdate()　　入力値が範囲内かチェックする
     *          引数の順番（月，日，年）
     */
    // 以下の値がPOSTされたと仮定
    $_POST["year"] = 2020;
    $_POST["month"] = 10;
    $_POST["day"] = 45;

    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];

    echo "<br>checkdate(".$day.", ".$month.", ".$year.")は…";
    if(checkdate($month,$day,$year)){
        echo "正しい日付です";
        inputData($year,$month,$day);
    }else{
        echo "日付が正しくありません";
    }

    function inputData($year,$month,$day){
        $d = new DateTime();
        // 年月日をセット
        $d->setDate($year,$month,$day);
    
        echo "<hr>指定の日付は…".$d->format("Y年 m月 d日")."です。";    
    }
?>