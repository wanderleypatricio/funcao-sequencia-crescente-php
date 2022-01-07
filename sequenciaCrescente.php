<?php
function sequenciaCrescente($array){
    $cont = 0;
    $aux = 0;
    
    $array =  explode(',', $array);
    
    $novo_array = array();
    
    foreach($array as $v){
        array_push($novo_array, intval($v));
    }
    
    $result_array = array_unique($novo_array);
    echo sizeof($result_array)." ". sizeof($novo_array);
    if(sizeof($result_array) === sizeof($novo_array)){
        for($i = 0; $i < sizeof($novo_array); $i++){
            if($novo_array[$i] > $novo_array[$i+1]){
                $cont++;
                $aux = $novo_array[$i];
                $novo_array[$i] = $novo_array[$i +1];
                $novo_array[$i + 1] = $aux;        

            }
        }
        echo json_encode($novo_array);
        if($cont < 2){
            echo " true";
        }else{
            echo " false";
        }
        echo $cont;
        $cont = 0;
    }else{
        echo json_encode($novo_array);
        echo " false";
    }
}


$vetor = $_POST['vetor'];



sequenciaCrescente($vetor);