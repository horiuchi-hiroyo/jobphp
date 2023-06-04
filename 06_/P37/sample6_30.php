<?php
/** +++++++++++++++++++++++++++
 *      sample6_14.phpを読込
 *　+++++++++++++++++++++++++++ */
require "sample6_29.php";

// インスタンス化
$obj = new Circle;

// セッターメソッドで半径の値を設定
// (sample6_31.php 解説)
echo $obj->setRadius(10);

// ゲッターメソッドを呼び出してプロパティ値を表示
// (sample6_31.php/sample6_32.php 解説)
echo "半径は".$obj->getRadius();