<?php

class KenkoShindan{
    // プロパティ（クラス内の変数）
    public $name;
    public $height;
    public $weight;

    /**
     *  コンストラクタ
     */
    public function __construct($name1,$height1,$weight1){
        $this->name = $name1;
        $this->height = $height1;
        $this->weight = $weight1;
    }

    /**
     *  メソッド：BMI計算
     *      BMI ＝ 体重kg ÷ (身長m)2
     *      round(引数,桁数); 
     *          引数：四捨五入対象
     *          桁数：小数点以下X桁まで表示する（X+1桁目を四捨五入）
     */
    public function bmiResult(){
        $height_m = $this->height/100;      //  身長（cm）を（m）に単位変更
        $height_m2 = $height_m * $height_m; //  （身長m）の２乗
        $bmi = $this->weight/$height_m2;    //  体重 ÷ 身長の２乗
        return round( $bmi,2);
    }
}

/* -----------------------------------------------------
*   健康診断カードを作成
*       氏名：山田太郎
*       身長：170cm
*       体重：65kg
* ----------------------------------------------------- */
    $yamada = new KenkoShindan("山田太郎",170,65);
    echo "名前：".$yamada->name."<br>";
    echo "身長：".$yamada->height."cm <br>";
    echo "体重：".$yamada->weight."kg <br>";
    echo "BMI：".$yamada->bmiResult();
?>