<?php
    // P106～
    /**
     * DBへ情報を格納する際の文字化け防止（定型句）
     */
    mb_internal_encoding("utf8");

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
         *  SQL文   select  →   query();
         *          insert  →   execute();
         */
        $stmt = $pdo->query("SELECT * FROM user ");

    }catch(PDOException $e){
        // 例外発生時にエラーメッセージを出力
        $e->getMessage();
    }

    // DB切断
    $pdo = null;

    // 文字列キーによる配列としてテーブル全行取得
    /**
     * fetchAll()　配列の取り出し方の指定
     *  PDO::FETCH_BOTH 数値キーと文字列キーによる配列として行を取得
     *  PDO::FETCH_NUM  数値キーによる配列として行を取得
     *  PDO::FETCH_ASSOC    文字列キーによる配列として行を取得
     *  PDO::FETCH_OBJ  列名に対応するプロパティを持つオブジェクトとして行を取得
     */
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザーリスト</title>
    <!-- CSS -->
    <style>
        td{
            padding:7px 40px;
        }
    </style>
</head>
<body>
    <h1>ユーザリスト</h1>
    <div class="confirm">
        <table>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>年齢</th>
                <th>コメント</th>
            </tr>
            <?php
                foreach($users as $user){
                    echo "<tr>\n";
                    echo "<td>{$user["id"]}</td>\n";
                    echo "<td>{$user["name"]}</td>\n";
                    echo "<td>{$user["mail"]}</td>\n";
                    echo "<td>{$user["age"]}</td>\n";
                    echo "<td>{$user["comments"]}</td>\n";
                    echo "</tr>\n";
                }
            ?>
        </table>
    </div>
</body>
</html>