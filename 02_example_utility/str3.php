<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎-str3</title>
</head>
<body>
    <a href="index.html">一覧に戻る</a><br>
    <h2>文字列操作（確認用）</h2>
    <?php
        echo "<p>printf()関数は、指定の表示形式に整える</p>";
            /* -----------------------------
             *  表示形式確認用　変数セット
             * ----------------------------- */
            $msg3 = 1;
            $msg4 = 1234.12345;
            $msg5 = "horiuchi hiroyo";

        // 数値／日付などの表示形式を整える
        //　※ %. + 小数点以下桁数 + f(float=浮動小数点)
        //      ->  例：小数点以下４桁まで表示する
        //              %.4f    (表示：XX.1234)
        echo "フォーマット「%.4f」を指定<br>";
        echo "対象：".$msg3."<br>";
        printf("printf()関数 -> %.4f <br><br>",$msg3);

        echo "対象：".$msg4."<br>";
        printf("printf()関数 -> %.4f <br><br>",$msg4);

        echo "対象：".$msg5."<br>";
        printf("printf()関数 -> %.4f <br><br>",$msg5);

        //  ※ % + 不足桁分は「0」で補填 + d(DECIMAL=10進数)
        //      ->  例：指定桁数に不足の場合は、左に「0」を追加で表示する
        //              %03d    (表示：00X　／　0XX　など)
        echo "<hr>";
        echo "フォーマット「%03d」を指定<br>";
        echo "対象：".$msg3."<br>";
        printf("printf()関数 -> %03d <br><br>",$msg3);

        echo "対象：".$msg4."<br>";
        printf("printf()関数 -> %03d <br><br>",$msg4);

        echo "対象：".$msg5."<br>";
        printf("printf()関数 -> %03d <br><br>",$msg5);

        //  ※ % + s (string=文字列)
        //      ->  例：文字列で表示する
        //              %s    (表示：文字列の表示)
        echo "<hr>";
        echo "フォーマット「%s」を指定<br>";
        echo "対象：".$msg3."<br>";
        printf("printf()関数 -> %s <br><br>",$msg3);

        echo "対象：".$msg4."<br>";
        printf("printf()関数 -> %s <br><br>",$msg4);

        echo "対象：".$msg5."<br>";
        printf("printf()関数 -> %s <br><br>",$msg5);
    ?>
</body>
</html>