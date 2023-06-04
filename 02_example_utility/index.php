<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎</title>
</head>
<body>
    <h2>文字列操作（確認用）</h2>
    <form method="post" action="">
        メッセージを入力してください。（$msg）<br>
        <textarea name="message" type="text" rows="10" cols="40"></textarea><br>
        「JobTraining」と比較。（$msg2）<br>
        <textarea name="message2" type="text" rows="3" cols="40"></textarea><br>
        <input type="submit" value="送信">
    </form>

    <hr>
        <h3>PHPにて処理を実施すると。。。</h3>

    <?php
        /* -------------------------------------------
         *  isset()で変数がセットされているかを調べ
         *  「true」が返された場合のみ処理を実行する 
         * ------------------------------------------- */
        if(isset($_POST['message'])){

            $msg = $_POST["message"];
            if($msg <> ""){
                echo '$msg -> '. $msg;

                echo "<hr><p>文字列( = テキスト)の扱い<br>";
                // sample：「 Breakfast was Japanese .」
                //  ※ 先頭に余分なスペース（半角スペース）が入力されている
                echo "trim()関数は、先頭末尾のホワイトスペース(=半角スペース／タブ／改行)を除く！</p>";
                echo "入力された文字は「".$msg."」です。<br><br>";
                echo "trim()関数 -> 『".trim($msg)."』<br><hr>";

                echo "strlen()関数は、文字数を数える（スペースもカウント対象）</p>";
                echo "strlen()関数 -> ".strlen($msg)."<br><hr>";
            }
        }

        /* -------------------------------------------
         *  isset()で変数がセットされているかを調べ
         *  「true」が返された場合のみ処理を実行する 
         * ------------------------------------------- */
        if(isset($_POST['message2'])){

            $msg2 = $_POST["message2"];
            if($msg2 <> ""){
                echo '$msg2 -> '. $msg2;

                $checkMsg = "JobTraining";

                // sample：「jobtraining」「JOBTRAINING」「JobTraining」など
                //  ※ 大文字／小文字の組み合わせを変えて結果の違いを確認しましょう
                //      sampleはすべて一致している場合(=0)となる
                //  　【 注意 】
                //      　文字の比較ではなく、大文字・小文字の違いを無視するための関数
                echo "<hr><p>";
                echo "strcasecmp()関数は、大文字・小文字の違いを無視して、２つの文字列を比較する<br>";
                echo "　一致している場合 ->「0」を返す<br>";
                echo "　不一致の場合 -> 引数１ > 引数２  負の数「-4」など<br>";
                echo "　　　　　　　　　引数１ < 引数２  正の数「6」など 差分を返す</p>";
                echo "比較文字(引数１)は「".$checkMsg."」文字です。<br>";
                echo "入力文字(引数２)は「".$msg2."」文字です。<br><br>";

                echo "strcasecmp()関数 -> ".strcasecmp($checkMsg,$msg2)."<br><br>";

                echo "<b>--- 等価演算子（ == ）を使った大文字・小文字の比較 ---</b><br>";
                $ans = $checkMsg == $msg2;
                echo "「".$checkMsg."」と「".$msg2."」を 等価演算子で比較すると…：『".$ans."』<br>";
                echo "大文字・小文字も一致している場合：『１』を返す<br>";
                echo "　　　　　不一致の場合：『』（何も返さない）<br>";
                echo "<b>--- --- --- --- --- --- ---</b><hr>";

                echo "<p>strtolower()関数は、対象を小文字にする</p>";
                echo "strtolower()関数 -> ".strtolower($msg2)."<br><hr>";

                echo "<p>strtoupper()関数は、対象を大文字にする</p>";
                echo "strtoupper()関数 -> ".strtoupper($msg2)."<br><hr>";

                // sample：「yamada tarou」など、スペースで区切った文字の処理も確認しましょう
                echo "<p>ucwords()関数は、単語の先頭を大文字にする</p>";
                echo "ucwords()関数 -> ".ucwords($msg2)."<br><hr>";

                // sample：「職業訓練受講環境確認」など、日本語は１文字が2~3バイトの扱いとなる
                //  例）substr("職業訓練受講環境確認",12,6) →　受講
                echo "<p>substr()関数は、指定した一部の文字列を取り出す<br>";
                echo "　日本語を指定した場合は、１文字が2~3バイトとなるので要注意</p>";
                $start = 4;     // 開始位置
                $end = 5;       // 取り出す対象文字数
                echo "開始位置：".$start."より、".$end."文字分抽出<br>";
                echo "substr()関数 -> ".substr($msg2,$start,$end)."<br><hr>";

                // sample：「jobtraining」（=職業訓練）
                //          　→　「emergency training」(防災訓練)に書き換えてみましょう！
                //  
                echo "<p>str_replace()関数は、文字列の一部を置き換える</p>";
                $target = "job";       //　$msg2 の一部
                $change = "emergency ";       //  変更内容
                echo "対象：".$target."を".$change."に変更<br>";
                echo "str_replace()関数 -> ".str_replace($target,$change,$msg2)."<br><hr>";
            }
        }

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