<?php
    /* ・－・－・－・－・－・－・－・－・－・－・
     *      リダイレクトの使用例
     *      sample7_11.phpにアクセスすると、
     *      sample7_12.phpへ自動で遷移
     * ・－・－・－・－・－・－・－・－・－・－・ */

    echo "sample7_11.php";      //  人の目には見えにくい
    header("Location: sample7_12.php");

?>