<?php

    // 以下の値がPOSTされたと仮定
    $_POST["year"] = 2020;
    $_POST["month"] = 10;
    $_POST["day"] = 15;
    $_POST["hour"] = 12;
    $_POST["minute"] = 30;

    $d = new DateTime();
    // 年月日をセット
    $d->setDate($_POST["year"],$_POST["month"],$_POST["day"]);
    // 時分をセット
    $d->setTime($_POST["hour"],$_POST["minute"]);

    echo $d->format("r");
?>