<?php
    /** ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
     *      コマンドラインで引数を利用
     *  ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ */
    if(isset($_SERVER["argv"][1])){
        $zip = $_SERVER["argv"][1];
    }else{
        echo "郵便番号をセットしてください";
        exit();
    }

    $pramas = array("zipcode" => $zip);
    $url = "http://zipcloud.ibsnet.co.jp/api/search?".http_build_query($pramas);

    /** *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★*
     *      １）curlセッションを初期化する
     *  *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★* */
    $ch = curl_init();
    
    /** *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★*
     *      ２）curlオプションを設定する
     *              CURLOPT_URL：取得する URL
     *              CURLOPT_RETURNTRANSFER：
     *                  「true」= curl_exec() の戻り値を文字列で返す
     *                   デフォルト = データを直接出力
     * 　【 https://www.php.net/manual/ja/function.curl-setopt.php 】
     *  *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★* */
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch,$options);

    /** *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★*
     *      ３）curlのセッションを実行する
     *  *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★* */
    $arr = curl_exec($ch);

        echo '$arr -> '."<pre>";
        var_dump($arr);
        echo "</pre><hr>";

    /** *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★*
     *      ４）curlのセッションを終了する
     *  *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★* */
    $arr = curl_close($ch);
?>