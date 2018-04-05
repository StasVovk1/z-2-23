<?php 
    $mass = [-1,-2,-1,-5,3,6,8,45,-3,54,6,7,-6,7,8,-4,5,6,7,16];
    $perem = false;
    $min = null;
    $mass_number = [];
    echo 'Исходные данные: '.json_encode($mass);

    for ($i = 0; $i < counts($mass); $i++){
        if($i+1 >= counts($mass)-1){break;}
        for ($j = $i+1; $j < counts($mass); $j++){
            if ($mass[$i] == $mass[$j] && $i != $j){                
                $perem = true;
                break;
            }
        }
        if ($perem && ($min > $mass[$i] || $min == null)){
            $min = $mass[$i];
        }
        $perem = false;
    }
    
    echo '<br> Ответ: '.$min;

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }

?>