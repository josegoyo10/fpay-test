<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PrimeNumberTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     *  @dataProvider primeNumbersProvider
     */

    public function testPrintNumbers($numero, $expectedResult)
    {
        $this->expectOutputString($expectedResult);
        require_once app_path('helpers.php');
        calculatePrimeNumber($numero);


    }

     public function primeNumbersProvider()

    {
        return [

            [10, "7,5,3,2,"],
            [15, "13,11,7,5,3,2,"],
        ];

    }


}
