<?php
    /** ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
     *      cURL()
     *  　HTTPリクエスト（URLで指定）し、外部サイトの情報を取得する関数
     * 　　※　file_get_contents()関数より詳細な制御が可能
     *  ---------------------------------------------------------------------
     *      エラー処理
     *          Ａ）cURLそのものからのエラー
     *                  ->　ホストが見つからない／サーバアクセス不可
     *          Ｂ）リモートサーバからのエラー
     *                  ->　リクエストURLが見つからない／レス時異常発生など
     *  ---------------------------------------------------------------------
     *  １）curl_init()     セッション初期化
     *  ２）curl_setopt()   オプションを設定
     *          ※ オプション配列でまとめて使用するなら【 curl_setopt_array() 】
     *  ３）curl_exec()     セッションを実行
     *  ４）curl_close()    セッション終了
     *  ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ */
    /** *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★*
     *      １）curlセッションを初期化する
     *  *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★* */
    $ch = curl_init("http://api.example.com");

        /** ・－・－・－・－・－・－・－・－・－・－・－・－・
         *  301:リクエストされたリソースの URL が永遠に変更。
         *      レスポンスで新しい URL が与えられます。
         *  ・－・－・－・－・－・－・－・－・－・－・－・－・*/
        // $ch = curl_init("http://manabiya-sakura.com");   
    
        /** ・－・－・－・－・－・－・－・－・－・－・－・－・
         *  200:リクエストが成功
         *  ・－・－・－・－・－・－・－・－・－・－・－・－・*/
        // $ch = curl_init("https://manabiya-sakura.com/");    
    
        echo '$ch -> '."<pre>";
        var_dump($ch);
        echo "</pre><hr>";
    
    /** *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★*
     *      ２）curlオプションを設定する
     *              CURLOPT_URL：取得する URL
     *              CURLOPT_RETURNTRANSFER：
     *                  「true」= curl_exec() の戻り値を文字列で返す
     *                   デフォルト = データを直接出力
     * 　【 https://www.php.net/manual/ja/function.curl-setopt.php 】
     *  *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★* */
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    /** *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★*
     *      ３）curlのセッションを実行する
     *              リクエスト先のURLが存在しない場合：false
     *  *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★* */
    $result = curl_exec($ch);

        echo '$result -> '."<pre>";
        var_dump($result);
        echo "</pre><hr>";

        /** ∴..∴..∴..∴..∴..∴..∴..∴..∴..∴..∴..∴
         *      エラー対策
         *          curl_getinfo()
         *              指定した伝送に関する情報を得る
         *  ∴..∴..∴..∴..∴..∴..∴..∴..∴..∴..∴..∴ */
        $info = curl_getinfo($ch);

            echo '$info -> '."<pre>";
            var_dump($info);
            echo "</pre><hr>";
        
        if($result === false){
            echo 'curl_errno : '.curl_errno($ch)."<br>";    //  https://www.php.net/manual/ja/function.curl-errno.php
            echo 'curl_error : '.curl_error($ch)."<br>";
        }else if($info["http_code"] >= 400){
            echo "HTTP エラー".$info["http_code"];
        }else{
            echo "成功しました";
        }

    /** *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★*
     *      ４）curlのセッションを終了する
     *  *★*――――*★* *★*――――*★**★*――――*★* *★*――――*★* */
    curl_close($ch);
?>