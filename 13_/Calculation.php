<?php
    class Calculation{
        /** ・－・－・－・－・－・－・－・－・－・－・－・－
         *      add(2,2)の結果が「４」になる
         *      add(-2,-5)の結果が「－７」になるのは…
         *     －－－－－－－－－－－－－－－－－－－－
         *     「２＋２」= ４
         * 　　「-2＋-5」= -7　
         *  ・－・－・－・－・－・－・－・－・－・－・－・－ */
        public function add($x,$y){
            return $x + $y;
        }

        /** ・－・－・－・－・－・－・－・－・－・－・－・－
         *      multiple(2,2)の結果が「４」になる
         *      multiple(-2,-5)の結果が「10」になるのは…
         *     －－－－－－－－－－－－－－－－－－－－
         *     「２ × ２」= ４
         * 　　「-2 × -5」= 10　
         *  ・－・－・－・－・－・－・－・－・－・－・－・－ */
        public function multiple($x,$y){
            // return $x * $y;
            return $x + $y;     //  テスト予想と異なる内容の場合
            /** ===================================================
             *  There was 1 failure:
             * 
             *   1) CalculationTest::testmultiple
             *   Failed asserting that -7 matches expected 10.      ←　10を期待してるのに、-7になってる
             * 
             *   C:\xampp\htdocs\php_202304\13_\CalculationTest.php:46
             * 
             *   FAILURES!
             *   Tests: 2, Assertions: 4, Failures: 1.
             *   =================================================== */
        }
    }
?>