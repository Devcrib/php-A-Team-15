<?php


function sortZeros ($Rray = []) 
{
    if(count($Rray) < 1) return 'Empty Array';
    if(count($Rray) === 1 && ($Rray[0] === 0 || $Rray[0] === '0') ) return 'df'.$Rray[0];

    $array_of_zeros = [];
    foreach($Rray as $key=>$val){
        if($val === 0 || $val === '0'){
            $array_of_zeros[$key] = $val;    
            unset($Rray[$key]);
        }
    }
    $preservedArray = [];

    foreach ($Rray as $key => $val) {
        $preservedArray[$key] = $val;
    }
    foreach ($array_of_zeros as $key => $val) {
        $preservedArray[$key] = $val;
    }

    return $preservedArray;
}
