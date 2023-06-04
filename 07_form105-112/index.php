<?php
    session_start();
    mb_internal_encoding("utf8");

    // 変数の初期化
    $errors = array();

    /* ・－・－・－・－・－・－・－・－・－・－・
     *  付録
     * ・－・－・－・－・－・－・－・－・－・－・ */
    function console_log($data){
        echo '<script>';
        echo 'console.log('.json_encode($data).')';
        echo '</script>';
    }
        console_log($_POST);

    /* ・－・－・－・－・－・－・－・－・－・－・
     *  アクセス方法がPOST通信であることを確認
     * ・－・－・－・－・－・－・－・－・－・－・ */
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        /* エスケープ処理
         *  悪意あるHTMLやJavaScriptを書き込まれる可能性がある
         *  セキュリティ攻撃（クロスサイトスクリプティング=XSS）が実行されないように、
         *  エスケープ処理実施すること。    */
        /*  ◆◇--------------------------------------------------------------◇◆
         *      関数：htmlentities(対象の文字列,オプション);
         *          オプション
         *            ENT_QUOTES    シングルクォートとダブルクォートを共に変換
         *              ※ entities（エンティティ）= 実態
         *  ◆◇--------------------------------------------------------------◇◆
         *      null合体演算子
         *          書式：A ?? B
         *          意味：「A」が??(=null)なら「B」を。null以外なら「A」を返す
         *          　例）$_POST["name"] ?? ""
         *                   →　$_POST["name"]　がnullなら、空白
         *                                      　null以外なら、$_POST["name"]を返す
         *  ◆◇--------------------------------------------------------------◇◆ */
        $_SESSION["name"] = htmlentities($_POST["name"] ?? "",ENT_QUOTES);
        $_SESSION["mail"] = htmlentities($_POST["mail"] ?? "",ENT_QUOTES);
        $_SESSION["age"] = htmlentities($_POST["age"] ?? "",ENT_QUOTES);
        $_SESSION["comments"] = htmlentities($_POST["comments"] ?? "",ENT_QUOTES);

        // バリデーションチェック
        $errors = validate_form();

        /*  ◆◇--------------------------------------------------------------◇◆
         *      関数：empty();
         *          変数が「空」かどうかを調べます
         *  ◆◇--------------------------------------------------------------◇◆ */
        if(empty($errors)){
            // エラーが無ければ、完了ページに遷移
            /*  ◆◇--------------------------------------------------------------◇◆
            *      関数：header("Location:遷移先URL or 相対パス");
            *        引数に指定したURLにリダイレクト（遷移）する
            *  ◆◇--------------------------------------------------------------◇◆ */
            header("Location:mail_confirm.php");
        }
    }

    /* ┏ ━ ━ ━ ━ ━ ━ ━ ━ ━ ━ ━ ━ ┓
     * ┃  P72～ (コード解説)  　 
     * ┗ ━ ━ ━ ━ ━ ━ ━ ━ ━ ━ ━ ━ ┛ */
    // バリデーションチェックを行う関数
    /*  ◆◇--------------------------------------------------------------◇◆
     *      入力項目に適した内容が入力されているかをチェックする
     *  ◆◇--------------------------------------------------------------◇◆ */
    function validate_form(){
        // エラーメッセージを初期化
        $form_errors = array();

        /* ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
         *  1.氏名のバリデーション
         *      strlen(); と trim(); を組み合わせて要素の長さを調査
         * －－－－－－－－－－－－－－－－－
         *      trim(); 半角スペースを取り除く
         *      strlen();   要素の長さを調べる
         *      ※ 要素の長さが「0」なら、エラー
         * ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━  */
        // $_POSTが設定されていないときに備えて、null合体演算子で対応
        $input["name"] = trim($_POST["name"] ?? "");
        //  $変数 == 0 ・・・入力されているかの確認
        if(strlen($input["name"]) == 0){
            $form_errors["name"] = "氏名を入力してください";
        }

        /* ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
         *  2.メールのバリデーション
         * －－－－－－－－－－－－－－－－－
         *      関数：filter_input();
         *      　書式：filter_input(INPUT_POST,"XXX",FILTER_VALIDATE_EMAIL);
         *          INPUT_POST,"XXX"　→　判定対象「$_POST['XXX'] 」の意味
         *          FILTER_VALIDATE_EMAIL　→　値がe-mailか判定
         *              判定結果が有効 = その値を。
         *                      　有効でない場合 = 「false」
         * ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━  */
        $input["mail"] = filter_input(INPUT_POST,"mail",FILTER_VALIDATE_EMAIL);
        if(!$input["mail"]){
            $form_errors["mail"] = "メールアドレスは正しい形で入力してください";
        }

        /* ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
         *  3.年齢のバリデーション
         * －－－－－－－－－－－－－－－－－
         *      関数：filter_input();
         *      　書式：filter_input(INPUT_POST,"XXX",FILTER_VALIDATE_INT,有効範囲);
         *          INPUT_POST,"XXX"　→　判定対象「$_POST['XXX'] 」の意味
         *          FILTER_VALIDATE_INT　→　値が整数か判定
         *              判定結果が有効 = その値を。
         *                      　有効でない場合 = 「false」
         * ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━  */
        //  有効範囲のセット
        $options = array("options" => array(
                                    "min_range" => 18,
                                    "max_range" => 65,
                                )
        );
        // 整数かどうかのチェック
        $input["age"] = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT,$options);
        /*  ◆◇----------------------------------------◇◆
         *       関数：is_null()　・・・nullかどうかチェック
         *      －－－－－－－－－－－－－－－－－
         * 　　  filter_input()　結果（True/False）をチェック
         *           「false」（=有効でない）の場合にif文の結果が『true』になる！
         *  ◆◇----------------------------------------◇◆ */
        if(is_null($input["age"]) || $input["age"] === false){
            $form_errors["age"] = "年齢は18歳以上、65歳以下で入力してください";
        }

        /* ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
         *  4.コメントのバリデーション
         * ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━  */
        //  $_POSTが設定されていないときに備えて、null合体演算子で対応
        $input["comments"] = trim($_POST["comments"] ?? "");
        //  $変数 == 0 ・・・入力されているかの確認
        if(strlen($input["comments"]) == 0){
            $form_errors["comments"] = "コメントを入力してください";
        }

        return $form_errors;
    }
?>

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
            <!-- 「php echo $_SESSION["name"]?? "";」の記述にて
                エラー時・内容修正時に一度入力した内容を再セット -->
            <input type="text" class="text" size="35" name="name" 
                value="<?php echo $_SESSION["name"]?? ""; ?>" >
                <!-- empty()　空白チェック
                    $errors["name"] が空白でない場合、処理続行
                    ※ {} の記述を「:（コロン）」で表記 -->
                <?php if(!empty($errors["name"])):?>    
                    <p class="err_message">
                        <?php echo $errors["name"]; ?>
                    </p>
                <?php endif; ?>
        </div>
        <div class="item">
            <lavel>メールアドレス</lavel>
            <input type="text" class="text" size="35" name="mail"
                value="<?php echo $_SESSION["mail"]?? ""; ?>" >
                <?php if(!empty($errors["mail"])):?>
                    <p class="err_message">
                        <?php echo $errors["mail"]; ?>
                    </p>
                <?php endif; ?>
        </div>
        <div class="item">
            <lavel>年齢</lavel>
            <input type="number" class="text" size="35" name="age"
                value="<?php echo $_SESSION["age"]?? ""; ?>" >
                <?php if(!empty($errors["age"])):?>
                    <p class="err_message">
                        <?php echo $errors["age"]; ?>
                    </p>
                <?php endif; ?>
        </div>
        <div class="item">
            <lavel>コメント</lavel>
            <textarea cols="35" rows="7" name="comments"
             ><?php echo $_SESSION["comments"]?? ""; ?></textarea>
                <?php if(!empty($errors["comments"])):?>
                    <p class="err_message">
                        <?php echo $errors["comments"]; ?>
                    </p>
                <?php endif; ?>
        </div>
        <div class="item">
            <input type="submit" class="submit" value="送信する">
        </div>
    </form>
</body>
</html>