<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎-str2</title>
</head>
<body>
    <a href="index.html">一覧に戻る</a><br>
    <h2>文字列操作（確認用）</h2>
    <form method="post" action="">
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

                // sample：「JobTraining」（=職業訓練）
                //          　→　「Emergency Training」(防災訓練)に書き換えてみましょう！
                //  
                echo "<p>str_replace()関数は、文字列の一部を置き換える</p>";
                $target = "Job";       //　$msg2 の一部
                $change = "Emergency ";       //  変更内容
                echo "対象：".$target."を".$change."に変更<br>";
                echo "str_replace()関数 -> ".str_replace($target,$change,$msg2)."<br><hr>";
            }
        }
    ?>
</body>
</html>