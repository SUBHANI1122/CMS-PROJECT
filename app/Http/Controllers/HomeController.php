<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home_page()
    {
        $data = Slider::where('status', '1')->get();
        return view('welcome')->with(['items' => $data]);
    }
    public function index()
    {
        return view('home');
    }
}
