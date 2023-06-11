<?php
    /**
     *      日時の加減算
     */
    $d = new DateTime("2022/7/11 11:38:47");
    echo "現在日時 → ".$d->format("Y/m/d H:i:s");
    echo "<br>";

    // １日後
    $d2= clone $d;      // 基準の日（$d）をクローン
    $d2 = $d2 -> modify("+1 day");
    echo "１日後 → ".$d2->format("Y/m/d H:i:s");
    echo "<br><br>".'$d'." -> <pre>";
    var_dump($d);
    echo "</pre><br>";
    echo "<br>";

    // ２週間前
    $d3= clone $d;      // 基準の日（$d）をクローン
    $d3 = $d3 -> modify("-2 week");
    echo "２週間前 → ".$d3->format("Y/m/d H:i:s");
    echo "<br><br>".'$d'." -> <pre>";
    var_dump($d);
    echo "</pre><br>";
    echo "<br>";

    echo "<hr>";
    /**
     *      変数利用
     */
    $rate = 3;             // 正の数：加算　／　負の数：減算
    $target = "month";       // 日：day　／　週：week　／　月：month

    $change = $rate." ".$target;
    $dChange = clone $d;    // 基準の日（$d）をクローン
    $dChange = $dChange -> modify($change);

    if($rate<0){
        $changeValue = abs($rate) . $target."前 ";
    }else{
        $changeValue = abs($rate) . $target."後 ";
    }
    echo $changeValue." → ".$dChange->format("Y/m/d H:i:s");
    echo "<br><br>".'$d'." -> <pre>";
    var_dump($d);
    echo "</pre><br>";
    echo "<br>";
    
    
?>