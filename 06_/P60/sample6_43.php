<?php

    try{
        $a = 6;
        $b = 2;
        if($b == 0){
            throw new Exception("0で割ることはできません");
        }
        $result = $a / $b;
        echo $result;
    }catch(Exception $e){
        echo $e->getMessage();
    }

?>