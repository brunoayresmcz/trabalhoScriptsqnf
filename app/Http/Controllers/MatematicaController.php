<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatematicaController extends Controller {
    
    public function soma($a, $b) {
        echo $a + $b;
    }

    public function subtracao($a, $b) {
        echo $a - $b;
    }

    public function divisao($a, $b) {
        echo $a / $b;
    }

    public function multiplicacao($a, $b) {
        echo $a * $b;
    }
}
