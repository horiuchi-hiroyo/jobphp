<?php

    $score = array("50点","80点","100点",);

    echo " ☆ foreach文を利用する ☆ 値を出力 \r\n";
    foreach($score as $value){
        echo $value;
    }

    /* +++++++++++++++++++++++++++++++++++
     *  $score 配列に格納したすべての値を
     *      $value の変数で処理する
     * +++++++++++++++++++++++++++++++++++ */
?>

<!--  for文 と foreach文の違いは？
         *
         *　・for文は、初期値・条件式・増減式 が必要　→　foreach文は不要
         *  ・foreach文は、key(=添え字）・value（=値）すべてを取得する
         *      ※ Keyが数値でない場合も、利用可能
         * 
         *
 -->
