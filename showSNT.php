<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $inputNumber = $_GET["nSNT"];
    ;
    for($i = 2; $i<$inputNumber;$i++){
        $prinSNT = true;
        for($j = 2; $j < $i; $j++){
            if ($i%$j ==0){
                $prinSNT = false;
            }
        }
        if ($prinSNT){
            echo $i." ";
        }
    }
}

?>