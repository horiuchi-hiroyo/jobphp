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
 *              secure属性の設定：「true」とすることで、https通信のみクッキー送信する
 *              httponly属性の設定：「true」の設定をすることで、JavaScriptなどのアクセスを防ぎ
 *                  XSS等をある程度予防できるようになる。
 *              （クロスサイトスクリプティング：WEBアプリケーションの
 *                  脆弱（ぜいじゃく）性を利用して悪意のあるコードを実行させる攻撃のこと）
 *   　++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *      cookieを削除する場合、有効期限を「time()-1」とする。
 *      「localhost」のURLで動作確認をしているので、ドメインは、「localhost」で。
 * 
 * 　◆ ◇ ◆ ------------------------------------------------------------- 　◆ ◇ ◆ */
    setcookie("user_id5",$_POST['id5'],time()+60*60*24*7,"/","","",true);
    var_dump($_COOKIE);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample10_05</title>
</head>
<body>
    <hr>
    <h2>coockieの設定</h2>
    <form method="POST" action="sample10_05.php">
        <input type="text" name="id5">
        <input type="submit" name="submit">
    </form>
    <hr>
    <p>
        <script> 
        /**
         *      httponlyのチェック…不明…
         */
            const element = document.querySelector("[name=id5]");
            console.log('id5: ',element);
            document.write('id5: ',element);
        </script>
    </p>

</body>
</html>