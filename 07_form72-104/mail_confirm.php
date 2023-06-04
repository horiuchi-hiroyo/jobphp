<?php
    // P82～
    session_start();
    mb_internal_encoding("utf8");

    /* ・－・－・－・－・－・－・－・－・－・－・
     *  入力された値が、SESSIONにセットされていない場合、
     *  入力画面にリダイレクト処理
     * ・－・－・－・－・－・－・－・－・－・－・ */
    if(!empty($_SESSION['name'])){
        $input["name"] = htmlentities($_SESSION["name"],ENT_QUOTES);
        $input["mail"] = htmlentities($_SESSION["mail"],ENT_QUOTES);
        $input["age"] = htmlentities($_SESSION["age"],ENT_QUOTES);
        $input["comments"] = htmlentities($_SESSION["comments"],ENT_QUOTES);
    }else{
        header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>入力内容を確認</title>
</head>
<body>
    <h1>内容確認</h1>
    <div class="confirm">
        <p>
            内容はこちらで宜しいでしょうか？<br>
            よろしければ「登録する」ボタンを押してください。
        </p>
        <p>名前<br><?php echo $input["name"]; ?></p>
        <p>メールアドレス<br><?php echo $input["mail"]; ?></p>
        <p>年齢<br><?php echo $input["age"]; ?></p>
        <p>コメント<br><?php echo $input["comments"]; ?></p>

        <form action="index.php">
            <input type="submit" class="button1" value="戻って修正する">
        </form>

        <form action="insert.php" method="POST">
            <input type="hidden" value="<?php echo $input["name"]; ?>" name="name">
            <input type="hidden" value="<?php echo $input["mail"]; ?>" name="mail">
            <input type="hidden" value="<?php echo $input["age"]; ?>" name="age">
            <input type="hidden" value="<?php echo $input["comments"]; ?>" name="comments">
            <input type="submit" class="button2" value="登録する">
        </form>
    </div>
</body>
</html>