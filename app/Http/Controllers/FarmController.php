<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use App\Models\Plant;

class FarmController extends Controller {

    public function plants() {
        return Plant::all();
    }

    public function findBySlug(Plant $plant) {
        return $plant;
    }

    public function farms() {
        return Farm::with('plant')
            ->get();
    }

}
