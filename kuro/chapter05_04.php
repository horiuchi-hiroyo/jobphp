<?php
    //      5章 4
    /* ------------------------------------------------
     *   次の関数を呼び出したとき、［Hello,taro］と
     *       表示されるものを選択してください（２つ選択）
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

    // A. 
    function message_a($message,$name = "hanako"){
        print "$message, $name";
    }

    /**
     *  B. 受取る為の変数を指定する必要がある
     *  （変数以外の値を引数に指定することはできない）
     */
    // function message_b(message,name){
    //     print "$message, $name";
    // }

    // C.
    function message_c($message = "Hello",$name = "taro"){
        print "$message, $name";
    }

    /**
     *  D. 引数のデフォルト値に変数を指定することはできない
     */
    // function message_d($message,$name = $taro){
    //     print "$message, $name";
    // }

    /**
     *  E. 受取る為の変数を指定する必要がある
     *  （変数以外の値を引数に指定することはできない）
     */
    // function message_e("Hello","taro"){
    //     print "$message, $name";
    // }

    print "\r\n A. ";
    message_a("Hello","taro");

    // print "\r\n B. ";
    // message_b("Hello","taro");

    print "\r\n C. ";
    message_c("Hello","taro");
    
    // print "\r\n D. ";
    // message_d("Hello","taro");

    // print "\r\n E. ";
    // message_e("Hello","taro");
?>