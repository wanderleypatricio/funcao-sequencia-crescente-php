<?php
function sequenciaCrescente($array){
    $cont = 0;
    $aux = 0;
    
    $array =  explode(',', $array);
    
    $novo_array = array();
    
    foreach($array as $v){
        array_push($novo_array, intval($v));
    }
    $array = $novo_array;
    
    for($i = 1; $i < sizeof($novo_array); $i++){
        for($i = 1; $i < sizeof($novo_array); $i++){
            if($novo_array[$i - 1] >= $novo_array[$i]){
                $aux = $novo_array[$i - 1];
                $novo_array[$i - 1] = $novo_array[$i];
                $novo_array[$i] = $aux;
                $cont++;
            }
        }
    }
    
    if($cont >= 2){
        $cont = 0;
        $novo_array = array();
        foreach($array as $v){
            array_push($novo_array, intval($v));
        }
        $maior_valor = max($novo_array);
        $novo_array = array_values(array_diff($novo_array, [$maior_valor]));
        array_push($novo_array, $maior_valor);
        for($x = 1; $x < 10; $x++){
            for($i = 1; $i < sizeof($novo_array); $i++){
                if($novo_array[$i - 1] >= $novo_array[$i]){
                    $aux = $novo_array[$i - 1];
                    $novo_array[$i - 1] = $novo_array[$i];
                    $novo_array[$i] = $aux;
                    $cont++;
                }
            }
        }
            
        echo json_encode($array);
        if($cont < 1){
            echo " true";
        }else{
            echo " false";
        }
        $cont = 0;
            
    }else{
        echo json_encode($array);
        if($cont < 2){
            echo " true";
        }else{
            echo " false";
        }
        $cont = 0;
    }
    
}


$vetor = $_POST['vetor'];



sequenciaCrescente($vetor);