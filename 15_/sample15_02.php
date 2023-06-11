<?php
    /** ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥
     *      DateTime()  日付と時刻を表現するクラス
     * 　【 https://www.php.net/manual/ja/class.datetime.php 】
     *  ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥ */
    $d = new DateTime();

    echo '$d : '."<pre>";
    var_dump($d);
    echo "</pre><hr>";

    /** ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥
     *      DateTime()　クラスのメソッド
     *  －－－－－－－－－－－－－－－－－－－－－－－
     *      format()　　表示形式を指定する
     *      表示形式（パラメーター）
     *          r   既定のレイアウト
     *          Y   西暦（yyyy）
     *          m   月（mm）・・・1～9月は、2桁表示
     *          d   日（dd）・・・1～9日は、2桁表示
     *  【 https://www.php.net/manual/ja/datetime.format.php 】
     *  ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥ */
    echo 'format("Y年m月d日") : '.$d -> format("Y年m月d日");

?>