<?php

namespace App\Http\Controllers;

use App\Models\Bike;

class BikeController extends Controller {

    public function list() {
        return Bike::all();
    }

    public function show(Bike $bike) {
        return $bike;
    }

}
