<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'Pierwsza strona';

    }
    //Znaki bez kotnekstu w środku funkcji
    public function show(){
        dhashas
        $array = [
            1,2,3,4,'a',5
        ];
        dd($array);
        return "test";
    }
    //Podzielenie przez zero
    public function divideByZero() {
        $numerator = 10;
        $denominator = 0;
        $result = $numerator / $denominator;
    }
    //Błąd logiczny w warunku
    public function logicalError() {
        $value = "true";
        if ($value == true) {
            echo "To jest prawda!";
        } else {
            echo "To jest fałsz!";
        }
    }
    //Brakujący znak średnika
    public function missingSemicolon() {
        $x = 5
        echo $x;
    }
    
    //Wywołanie nieistniejącej funkcji
    function callNonExistentFunction() {
        nonExistentFunction();
    }



}
