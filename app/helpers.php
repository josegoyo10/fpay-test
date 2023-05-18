<?php

function changeDateFormate($date, $date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
}

function calculatePrimeNumber($number){

    for ($i = $number; $i >=2; $i--) {
        if (isNumPrimo($i)) {
           echo   $i. ",";
        }
    }

}

 function isNumPrimo($number){

    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number/2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

