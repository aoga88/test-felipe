<?php

namespace App\Http\Controllers;

class HelloController extends Controller{

    public function showHello($word){
        return "Hola! nuevo mensaje de prueba: ".$word;
    }

}