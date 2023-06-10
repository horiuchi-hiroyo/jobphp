<?php
    // P87～
    /**
     * DBへ情報を格納する際の文字化け防止（定型句）
     */
    mb_internal_encoding("utf8");
    session_start();

    /**
     *  パスワードのハッシュ化
     *      ハッシュ関数を利用して、元の文字列を推測できないようにする
     */
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);

    try{
        // DBに接続
        $pdo = new PDO("mysql:dbname=php_practice;host=localhost;","root","");
        // エラーモードを「警告」に設定
        /**
         * PDO::ERRMODE_EXCEPTION を利用することで、例外をスローすることが可能に。
         * （デバッグに適したモード）
         */
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        /**
         * プリペアードステートメント（prepared statement)
         *  セキュリティ対策
         */
        $stmt = $pdo->prepare("INSERT INTO user(name,mail,age,password,comments) VALUES(?, ?, ?, ?, ?)");

        /**
         * プレースホルダー（place holder）
         * フォームより入力される値部分を「？」にてSQL文を作成し、
         * 無害処理後の値を後からセット(=バインド)する
         *      $_POST["password"]は使用しない！
         *          →　ハッシュ化された「$password」を利用する
         */
        $stmt->execute(array($_POST["name"],$_POST["mail"],$_POST["age"],$password,$_POST["comments"]));
    }catch(PDOException $e){
        // 例外発生時にエラーメッセージを出力
        $e->getMessage();
    }

    // DB切断
    $pdo = null;

    // セッションの破棄
    $_SESSION = array();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h1>登録完了</h1>
    <div class="confirm">
        <p>登録有難うございました。</p>
        <form action="index.php">
            <input type="submit" class="button1" value="TOPに戻る">
        </form>
    </div>
</body>
</html>