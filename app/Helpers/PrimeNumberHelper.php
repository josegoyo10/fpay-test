<?php

function changeDateFormate($date, $date_format){
    return \Carbon\Carbon::createFormat('Y-m-d', $date)->format($date_format);
}
