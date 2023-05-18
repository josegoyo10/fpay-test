<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeNumberController extends Controller
{
    //
    public function index($number) {

    //dd($number);
     $primeNumber = $this->calculatePrimeNumber($number);
     return response()->json($primeNumber);

    }


    private function calculatePrimeNumber($number){

        $arrayPrime = [];
        for ($i = $number; $i >=2; $i--) {
            if ($this->isNumPrimo($i)) {
                $arrayPrime[] = $i;
            }
        }

        return $arrayPrime;

    }

    private function isNumPrimo($number){

        if ($number < 2) {
            return false;
        }

        //dd("llego:",$number);

        for ($i = 2; $i <= $number/2; $i++) {
            //echo "i:". $i."<br>\n";
            //echo "number:". $number."<br>\n";
            if ($number % $i === 0) {
                return false;
            }

        }

        return true;



    }




}
