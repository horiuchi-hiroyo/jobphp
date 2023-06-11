<?php

    /**
     * 指定の値が有効範囲外の場合
     * 例：10月35日　→　（10月31日までのため、11月4日となる）
     */
    // 以下の値がPOSTされたと仮定
    $_POST["year"] = 2020;
    $_POST["month"] = 10;
    $_POST["day"] = 15;
    $_POST["hour"] = 12;
    $_POST["minute"] = 30;

        /**
         *      checkdate()　　入力値が範囲内かチェックする
         */
        echo "<br>".'checkdate(3,35,2016)'."は…";
        if(checkdate(3,35,2016)){
            echo "正しい日付です";
        }else{
            echo "日付が正しくありません";
        }

        echo "<br>".'checkdate(3,15,2016)'."は…";
        if(checkdate(3,15,2016)){
            echo "正しい日付です";
        }else{
            echo "日付が正しくありません";
        }

    public SetDate($year,$month,$day){
        $d = new DateTime();
        // 年月日をセット
        $d->setDate($year,$month,$day);
    
        echo "<hr>指定の日付は…".$d->format("Y年 m月 d日")."です。";    
    }
?>