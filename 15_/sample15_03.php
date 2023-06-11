<?php
    /** ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥
     *      DateTime()  日付と時刻を表現するクラス
     *          引数を指定することで、特定の日付をセット可能
     *          引数の記述
     *              ・"yyyy-mm-dd"
     *              ・"m/d"
     *              ・"March 5th 2020" ←　例
     *              ・"10:36 am"  ←　例　※ 日付 = 今日になる
     * 　【 https://www.php.net/manual/ja/class.datetime.php 】
     *  ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥ */
    $d = new DateTime("2023-06-01");

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