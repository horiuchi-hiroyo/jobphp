<?php
    // セッションの利用
    session_start();
    // メールアドレス・パスワード（ハッシュ化）：バリデーション
    // ログイン状態の保持　：　クッキー
    // ログイン情報の確認

    // 正しければ「board.php」へ
    // header("Location:board.php");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- CSS/login.css -->
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>会員制掲示板_ログイン画面</title>
</head>
<body>
    <!-- 見出しタイトル -->
    <h2 class="form_title">ログインページ</h2>
    <!-- フォーム -->
    <form method = "POST" action = "">
        <!-- メールアドレス -->
        <div class="item">
            <label>メールアドレス</label>
            <input type="text" class="text" name="mail" />
        </div>
        <!-- パスワード -->
        <div class="item">
            <label>パスワード</label>
            <input type="Password" class="text" name="pass" />
        </div>
        <!-- ログイン状態を保持する -->
        <div class="item">
            <label>
                <input type="checkbox" class="checkbox" name="keep" value="1" />　ログイン状態を保持する
            </label>
        </div>
        <!-- ログインボタン -->
        <div class="item">
            <input type="submit" class="loginBtn" name="loginBtn" />
        </div>
    </form>
</body>
</html>