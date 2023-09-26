<?php
    session_start();
    mb_internal_encoding("utf8");

    // echo '【$_POST】<pre>';
    // echo var_dump($_POST);
    // echo "</pre>";
    // echo "<hr>";

    // echo '【$_SESSION】初期値 <pre>';
    // echo var_dump($_SESSION);
    // echo "</pre>";
    // echo "<hr>";

    if(empty($_SESSION['id'])){
        // headerをコメント化して、出力確認
        //  直接遷移時は、login.php へ
        header("Location:login.php");
    }elseif(!isset($_SESSION['id'])){
        header("Location:board.php");
    }

    // 変数の初期化
    $errors = array();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // POST処理
        // エスケープ処理   --  <script>alert("XSS対策が出来ていません");</script> 対策  --
        $_SESSION["title"] = htmlentities($_POST["title"]??"",ENT_QUOTES);
        $_SESSION["comments"] = htmlentities($_POST["comments"]??"",ENT_QUOTES);

        echo '【$_SESSION】ENT_QUOTES後 <pre>';
        echo var_dump($_SESSION);
        echo "</pre>";

        // バリデーションチェック
        $errors = validate_form();
        if(empty($errors)){
            echo "新規コメント登録してよ！<br>";
                // postテーブルへ新規書込
                try{
                    $pdo = new PDO("mysql:dbname=php_jissen; host=localhost;" ,"root" ,"");
                    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    //
                    $stmt = $pdo -> prepare("insert into post(user_id,title,comments,posted_at) values(?,?,?,?);");
                        echo "<hr>id:".$_SESSION["id"]."<br>";
                        echo "title:".$_SESSION["title"]."<br>";        //  $_POSTと$_SESSION 使い分け注意
                        echo "comments:".$_SESSION["comments"]."<br>";  //  $_POSTと$_SESSION 使い分け注意
                        print date('Y/m/d H:i:s')."<br>";
                        print date('Y/m/d H:i:s')."←　日本";
                    date_default_timezone_set('Asia/Tokyo');    //  時差：日本時間に
                    $japanDate = date('Y/m/d H:i:s');
                    $stmt -> execute(array($_SESSION["id"],$_SESSION["title"],$_SESSION["comments"],$japanDate));
                    $pdo = null;
                    }catch(PDOException $e){
                    $e -> getMessage();
                }
            // エラーが無ければ、掲示板ページに遷移
            //  タイトル／コメント 内容クリア
            $_SESSION['title'] = "";
            $_SESSION['comments'] = "";
            header("Location:board.php");
        }
    }

    // バリデーションチェックの行う関数
    function validate_form(){
        // エラーメッセージを初期化
        $form_errors = array();

        // A.タイトルのバリデーション
        $input["title"] = trim($_POST["title"]??"");      // $_POSTが設定されていないときに備えて、null演算子で対応
        if(strlen($input["title"])==0){                    // 入力されているかの確認
            $form_errors["title"] = "タイトルを入力してください";
        }

        // B.コメントのバリデーション
        $input["comments"] = trim($_POST["comments"]??"");      // $_POSTが設定されていないときに備えて、null演算子で対応
        if(strlen($input["comments"]) == 0){                    // 入力されているかの確認
            $form_errors["comments"] = "コメントを入力してください";
        }
           return $form_errors;
    }
    
    // 掲示板内容表示
    try{
        $pdo = new PDO("mysql:dbname=php_jissen; host=localhost;" ,"root" ,"");
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // post テーブルとuser テーブルを結合（出力は、日付の新しい順：DESC）
        $stmt = $pdo -> query("select * from post inner join user on post.user_id=user.id order by posted_at DESC;");
        $posts = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            // // テーブルデータの配列出力
            // echo "<hr>";
            // echo "<pre>";
            // echo var_dump($posts);
            // echo "</pre><hr>";
        $pdo = null;
        }catch(PDOException $e){
        $e -> getMessage();
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会員制掲示板</title>
    <link rel="stylesheet" type="text/css" href="board.css">
</head>
<body>
    <!-- ヘッダー -->
    <div class="confirm">
        <img class="logoImg" src="img/corporate_logo.webp">
        <div class="login_info">
            <p>こんにちは。<?php echo $_SESSION["name"]; ?> さん</p>
            <form action="logout.php">
                <input type="submit" class="button1" value="ログアウト">
            </form>
        </div>  
    </div>

    <header>
        <!-- メニュー -->
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <main>
        <div class="mainVisual">
            <!-- 見出し -->
            <h1>プログラミングに役立つ掲示板</h1>
            <!-- 入力フォーム -->
            <form class="io_form input_form" method="POST" action="">
                <h2 class="form_title">入力フォーム</h2>
                <div class="item">
                    <div class="msg">
                        <label>タイトル</label>
                        <?php if(!empty($errors["title"])):?>
                            <p class="err_message"><?php echo $errors["title"];?></p>
                        <?php endif; ?>
                    </div>
                    <input type="text" class="text" size="35" name="title" value="<?php echo $_SESSION["title"]??"";?>">
                </div>
                <div class="item">
                    <div class="msg">
                        <label>コメント</label>
                        <?php if(!empty($errors["comments"])):?>
                                <p class="err_message"><?php echo $errors["comments"];?></p>
                        <?php endif; ?>
                    </div>
                    <textarea cols="35" rows="7" name="comments"><?php echo $_SESSION["comments"]??"";?></textarea>
                </div>
                <div class="item">
                    <input type="submit" class="submit" value="送信する">
                </div>
            </form>

            <!-- 投稿内容表示 -->
            <?php
                foreach($posts as $post){
                    // **   日付フォーマット    ** //
                    // echo "<pre>";
                    // echo var_dump($post['posted_at']);
                    // echo "</pre><br>";

                    $d = $post['posted_at'];
                    // --  yyyy-mm-dd hh:mm:ss  -- //
                    //     0        1              //
                    // --  0123456789012345678  -- //
                    $year = substr($d,0,4);    //yyyy
                    $month = substr($d,5,2);   //mm
                    $day = substr($d,8,2);     //dd
                    $hour = substr($d,11,2);   //HH
                    $minute = substr($d,14,2); //MM
                    $ymdhm =  array("year"=>$year,"month"=>$month,"day"=>$day,"hour"=>$hour,"minute"=>$minute);

                    // echo '[$ymdhm] <pre>';
                    // echo var_dump($ymdhm);
                    // echo "</pre>";

                    $objDateTime = new DateTime();
                    $objDateTime -> setDate($ymdhm["year"],$ymdhm["month"],$ymdhm["day"]);
                    $objDateTime -> setTime($ymdhm["hour"],$ymdhm["minute"]);

                    // echo '[$objDateTime] <pre>';
                    // echo var_dump($objDateTime);
                    // echo "</pre><br><br>";

                    $at_day =  $objDateTime -> format('Y年m月d日 H:i');

                    echo '<form class="io_form output_form" method="POST" action="">';
                    echo    '<div class="display_title">';
                    echo        "{$post['title']}\n";
                    echo    '</div>';

                    echo    '<div class="display_comments">';
                    echo        "{$post['comments']}\n";
                    echo    '</div>';

                    echo    '<div class="display_name">';
                    // echo        "投稿者(user_id)：{$post['user_id']} -> {$post['name']}\n";
                    echo        "投稿者：{$post['name']}\n";
                    echo    '</div>';

                    echo    '<div class="display_time">';
                    echo        "投稿時間：{$at_day}\n";
                    echo    '</div>';

                    echo '</form>';
                }
            ?>
        </div>

        <div class="maininfo">
            <!-- 小タイトル + 箇条書きリスト -->
            <h3>人気の記事</h3>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>
            <!-- 小タイトル + 箇条書きリスト -->
            <h3>オススメリンク</h3>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            <!-- 小タイトル + 箇条書きリスト -->
            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </main>

    <footer>
        <!-- © -->
        <p>copyright © manabiya-sakura | members-BBS studying programming.</p>
    </footer>
</body>
</html>