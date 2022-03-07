<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getSliderData(){
        $data = Slider::get();
        return response()->json($data);;
    }
}
