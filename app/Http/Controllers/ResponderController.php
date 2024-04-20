<?php

namespace App\Http\Controllers;

class ResponderController extends Controller {

    private $weather = [
        'city' => 'Luzern',
        'temperature' => 20,
        'wind' => 10,
        'rain' => 0,
    ];

    public function hi() {
        return 'Hello World';
    }

    public function greet(string $name) {
        return "Hello $name";
    }

    public function number() {
        return random_int(1, 10);
    }

    public function redirect() {
        return redirect('https://ict-bz.ch');
    }

    public function favicon() {
        return response()->download(public_path('favicon.ico'));
    }

    public function weather() {
        return response()->json($this->weather);
    }

    public function errorMessage() {
        return response()->json([
            'error' => 'Nicht authorisiert!'
        ], 401);
    }

    public function multiply(int $number1, int $number2) {
        return $number1 * $number2;
    }

}
