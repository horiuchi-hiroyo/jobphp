<?php
    //      5章 5
    /* ------------------------------------------------
     *   関数の説明として
     *      誤っているものを選択してください（１つ選択）
     * ------------------------------------------------ */
    /* ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
     *  引数
     * 　関数の呼び出し側の引数（実引数）
     * 　定義側の引数（仮引数）
     *  ---------------------------------
     *  【 仮引数にてデフォルト値が代入されている場合 】
     *      実引数の指定が無い　->　デフォルト値を利用（Ｃ）
     *      実引数がある場合    ->　実引数の値が優先される（Ａ）
     * ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ */

    /**
     *  A. 関数内でreturn文を複数記述することができる
     */
    function message_a($num = 0){
        if($num == 1){
            return $num."： 1です。";
        }else{
            return $num."： 1ではない。";
        }
    }

    print "\r\n A. = 1 -> ";
    print message_a(1);

    print "\r\n A. ≠ 1 -> ";
    print message_a(0);

    /**
     *  B. 関数が何も値を返さない場合、return文は省略することができる
     */
    function message_b($message = "B"){
        print $message;
    }

    print "\r\n B. ";
    message_b("Yes");

    /**
     *  C. return文は値をカンマで区切ることで複数の値を返すことができる
     *      ->「できない！」
     *  ----------------------------------
     *   Parse error: syntax error, unexpected token ",", expecting ";"
     *      ↑ Parse error・・・文法エラー！
     */
    // function message_c($message = "msg1"){
    //     return $message, "msg2";
    // }

    // print "\r\n C. ";
    // print message_c("Hello");

    /**
     *  D. return文は配列を返すことができる
     */
    function message_d($message){
        return $msg = [$message,"msg2","msg3"];
    }

    print "\r\n D. ";
    var_dump(message_d("Hello"));
?>