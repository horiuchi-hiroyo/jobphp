<?php
    // P43～
    session_start();
    mb_internal_encoding("utf8");

    // ログイン状態であれば、マイページにリダイレクト
    if(isset($_SESSION["id"])){
        header("Location:mypage.php");
    }

    // 変数の初期化
    $error = "";

    // POST処理
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // エスケープ処理
        $input["mail"] = htmlentities($_POST["mail"] ?? "",ENT_QUOTES);
        $input["password"] = htmlentities($_POST["password"] ?? "",ENT_QUOTES);

        /** ++++++++++++++++++++++++++++++
         *   １．バリデーションチェック
         *  ++++++++++++++++++++++++++++++ */ 
        // メールの形式確認
        if(!filter_input(INPUT_POST,"mail",FILTER_VALIDATE_EMAIL)){
            $errors = "メールアドレスとパスワードを正しく入力してください。";
        }
        // 入力されているかの確認
        if(strlen(trim($_POST["password"] ?? "")) == 0){
            $error = "メールアドレスとパスワードを正しく入力してください。";
        }
        /** ++++++++++++++++++++++++++++++
         *   ２．ログイン認証
         *  ++++++++++++++++++++++++++++++ */         
        if(empty($errors)){
            // DBに接続
            try{
                $pdo = new PDO("mysql:dbname=php_practice;host=localhost;","root","");
                // エラーモードを「警告」に設定
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                // 入力されたメールアドレスを元にユーザー情報を取り出す
                $stmt = $pdo->prepare("SELECT * FROM user WHERE mail = ? ");
                $stmt->execute(array($input["mail"]));
                // 文字列キーによる配列としてテーブル取得
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                $pdo = NULL;
            }catch(PDOException $e){
                // 例外発生時にエラーメッセージを出力
                $e->getMessage();
            }

            // ユーザー情報の取得成功 ＆　パスワードが一致
            // 　→　セッションに値を代入し、マイページへ遷移
            /**+++++++++++++++++++++++++++++++++++++++++++++++++++++++
             *  password_verify()：ハッシュ値に適合するか調査する関数
             *      引数１：入力された値（平文のパスワード）
             *      引数２：ハッシュ値
             * +++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
            if($user && password_verify($input["password"],$user["password"])){
                $_SESSION["id"] = $user["id"];
                $_SESSION["name"] = $user["name"];
                $_SESSION["mail"] = $user["mail"];
                $_SESSION["age"] = $user["age"];
                $_SESSION["password"] = $input["password"]; //  セットするのは「フォームに入力された」Password
                $_SESSION["comments"] = $user["comments"];

                // 「ログイン情報を保持する」にチェックがあれば、セッションにセットする
                if($_POST["login_keep"] == 1){
                    $_SESSION["login_keep"] = $_POST["login_keep"];
                }

                // 「ログイン情報を保持する」にチェック：true → クッキーをセット／ false → 削除
                /** +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                 *      ログイン成功(=各$_SESSION[]に値がセットされている
                 *      ログイン情報を保持する(= $_SESSION["login_keep"]=1) の判定
                 *  ----------------------------------------------
                 *      setcookie()
                 *          time()+60*60*24*7   →　有効期限：1週間
                 *          time()-1            →　有効期限：破棄
                 *  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                if(!empty($_SESSION["id"]) && !empty($_SESSION["login_keep"])){
                    setcookie("mail",$_SESSION["mail"],time()+60*60*24*7);
                    setcookie("password",$_SESSION["password"],time()+60*60*24*7);
                    setcookie("login_keep",$_SESSION["login_keep"],time()+60*60*24*7);
                }else if(empty($_SESSION["login_keep"])){
                    setcookie("mail",$_SESSION["mail"],time()-1);
                    setcookie("password",$_SESSION["password"],time()-1);
                    setcookie("login_keep",$_SESSION["login_keep"],time()-1);
                }
                header("Location:mypage.php");
            }else{
                $error = "メールアドレスとパスワードを正しく入力してください。";
            }
        }
    }

    echo '$_SESSION -> '."<pre>";
    var_dump($_SESSION);
    echo "</pre><hr>";

    echo '$_COOKIE -> '."<pre>";
    var_dump($_COOKIE);
    echo "</pre><hr>";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログインページ</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 class="form_title">ログインページ</h1>
    <form method="POST" action="">
        <div class="item">
            <label>メールアドレス</label>
            <input type="text" class="text" size="40" name="mail" value="<?PHP
                                                                            if($_COOKIE["login_keep"] ?? ""){
                                                                                echo $_COOKIE["mail"];
                                                                            }
                                                                        ?>">
        </div>

        <div class="item">
            <label>パスワード</label>
            <input type="password" class="text" size="40" name="password" value="<?PHP
                                                                                    if($_COOKIE["login_keep"] ?? ""){
                                                                                        echo $_COOKIE["password"];
                                                                                    }
                                                                                ?>">

            <?php if(!empty($errors)): ?>
                <p class="err_message"><?php echo $errors; ?></p>
            <?php endif; ?>
        </div>

        <div class="item">
            <label>
                <input type="checkbox" name="login_keep" value="1"
                    <?PHP
                        if($_COOKIE["login_keep"] ?? ""){
                                echo "checked = 'checked' ";
                            }
                    ?>>ログイン状態を保持する
            </label>
        </div>

        <div class="item">
            <input type="submit" class="submit" value="ログイン">
        </div>
    </form>
</body>
</html>