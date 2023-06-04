<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎-str1</title>
</head>
<body>
    <a href="index.html">一覧に戻る</a><br>
    <h2>文字列操作（確認用）</h2>

    <form method="post" action="">
        メッセージを入力してください。（$msg）<br>
        <textarea name="message" type="text" rows="10" cols="40"></textarea><br>
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
    ?>
</body>
</html>