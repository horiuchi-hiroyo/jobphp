<?php
    /** ◇◆－－－－－－－－－－－－－－－－－－－－－◆◇
     *          PHPUnit テストを実装
     *      －－－－－－－－－－－－－－－－－－－－－
     *          １）TestCaseクラスの使用宣言
     *          ２）テスト対象のファイルを読み込む
     *          ３）処理の内容をassertEquals()を利用して比較
     *                  Ａ）期待する値
     *                  Ｂ）処理関数呼び出しなど実際の値
     *  ◇◆－－－－－－－－－－－－－－－－－－－－－◆◇ */
    use PHPUnit\Framework\TestCase;
    require_once "Calculation.php";

    class CalculationTest extends TestCase{

        /** +++++++++++++++++++++++++++
         *      add() のチェック
         *  +++++++++++++++++++++++++++ */
        public function testadd(){
            $cal = new Calculation();

            /** ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥
             *      assertEquals() ・・・ ＡとＢを比較する
             * 
             *  【 https://docs.phpunit.de/en/9.6/assertions.html#assertequals 】
             * 
             *      書式：assertEquals(mixed $expected, mixed $actual[, string $message = ''])
             *             ２つの変数「$expected」と「$actual」が等しくない場合、
             *            「$message」で識別されるエラーを報告
             *  ‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥ */
            // 結果：４になるはず、add(2,2)の処理結果が。
            $this->assertEquals(4,$cal->add(2,2));
            // 結果：－７になるはず、add(-2,-5)の処理結果が。
            $this->assertEquals(-7,$cal->add(-2,-5));            
        }

        /** +++++++++++++++++++++++++++
         *      multiple() のチェック
         *  +++++++++++++++++++++++++++ */
        public function testmultiple(){
            $cal = new Calculation();

            // 結果：４になるはず、multiple(2,2)の処理結果が。
            $this->assertEquals(4,$cal->multiple(2,2));
            // 結果：10になるはず、multiple(-2,-5)の処理結果が。
            $this->assertEquals(10,$cal->multiple(-2,-5));
        }
    }