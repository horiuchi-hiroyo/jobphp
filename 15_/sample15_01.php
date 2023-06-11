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
     *  【 https://www.php.net/manual/ja/datetime.format.php 】
     *  ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥ */
    echo 'format("r") : '.$d -> format("r");

?>