<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 class="form_title">登録フォーム</h1>
    <form method="POST" action="">  <!-- 自分自身のファイルに値を渡す場合：action="" -->
        <div class="item">
            <lavel>名前</lavel>
            <input type="text" class="text" size="35" name="name">
        </div>
        <div class="item">
            <lavel>メールアドレス</lavel>
            <input type="text" class="text" size="35" name="mail">
        </div>
        <div class="item">
            <lavel>年齢</lavel>
            <input type="number" class="text" size="35" name="age">
        </div>
        <div class="item">
            <lavel>コメント</lavel>
            <textarea cols="35" rows="7" name="comments"></textarea>
        </div>
        <div class="item">
            <input type="submit" class="submit" value="送信する">
        </div>
    </form>
</body>
</html>