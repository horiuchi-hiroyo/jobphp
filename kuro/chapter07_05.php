<?php
    var_dump($_POST);

    echo "<hr>";

    print 'ID: '.$_POST['nember_id'] ?? '';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>7章-05</title>
</head>
<body>
    <h2>7章-問5</h2>
    <p>フォームを利用したWebページでは、フォームパラメータの値が<br>
        入力されなかった際にPHPから警告メッセージが表示されます。<br>
        警告メッセージが表示されないようにする場合、空欄①に当てはまる記述として<br>
        正しいものを選択してください。（１つ選択）</p>
    <form method="POST" action="chapter07_05.php">
        <input type="text" name="nember_id">
        <input type="submit" name="submit">
    </form>
</body>
</html>