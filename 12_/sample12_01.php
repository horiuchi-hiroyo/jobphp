<?php
    // 以下の値がPOSTされたと仮定
    $_POST["name"] = "山田太郎";
    $_POST["age"] = 25;
    $_POST["mail"] = "yamada@yahoo.jp";

    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

?>