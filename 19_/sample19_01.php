<?php
    /** ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
     *      cURL()
     *  　HTTPリクエスト（URLで指定）し、外部サイトの情報を取得する関数
     * 　　※　file_get_contents()関数より詳細な制御が可能
     *  ---------------------------------------------------------------------
     *  １）curl_init()     セッション初期化
     *  ２）curl_setopt()   オプションを設定
     *          ※ オプション配列でまとめて使用するなら【 curl_setopt_array() 】
     *  ３）curl_exec()     セッションを実行
     *  ４）curl_close()    セッション終了
     *  ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ */

    $pramas = array("zipcode" => "7810112");
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