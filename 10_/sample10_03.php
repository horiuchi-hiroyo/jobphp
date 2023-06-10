<?php
/**　◆ ◇ ◆ ------------------------------------------------------------- 　◆ ◇ ◆
 *      setcookie();    クッキーの設定
 *          引数１：クッキー名
 *          [option]
 *              値：
 *              有効期限：1970/1/1 からの経過秒数を設定
 *                  ※ time()：1970/1/1 からの経過秒数を返す
 *                  使用例）time() + 60*60*24*7     ・・・１週間 => 今 + 60秒*60分*24時間*7日 
 *              URLパス：有効範囲（デフォルト値：0 = 当ディレクトリとサブディレクトリで有効）
 *                  同サイト内でクッキーを有効にする場合、「／(= ルート)」指定
 *              ドメイン：「manabiya-sakura」や、「blog.manabiya-sakura.com」というように
 *                  サブドメインを超えてクッキーを有効にする場合、「.manabiya-sakura.com」指定
 *              secure属性の設定：
 *              httponly属性の設定：
 *   　++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *      cookieを削除する場合、有効期限を「time()-1」とする。
 *      「localhost」のURLで動作確認をしているので、ドメインは、「localhost」で。
 * 
 * 　◆ ◇ ◆ ------------------------------------------------------------- 　◆ ◇ ◆ */
    setcookie("user_id3",$_POST['id3'],time()+60*60*24*7,"/",".localhost");

    var_dump($_COOKIE);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample10_03</title>
</head>
<body>
    <hr>
    <h2>coockieの設定</h2>
    <form method="POST" action="sample10_03.php">
        <input type="text" name="id3">
        <input type="submit" name="submit">
    </form>
</body>
</html>