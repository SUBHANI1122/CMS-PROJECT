<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;
use Validator;
use TJGazel\Toastr\Facades\Toastr;

class TeamController extends Controller
{
    protected $model;
    protected $route;
    protected $heading;
    protected $topHeading;

    public function __construct()
    {
        $this->model = new Team();
        $this->route = 'team';
        $this->heading = 'team';
        \Illuminate\Support\Facades\View::share('top_heading', 'Team');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  $this->model::paginate();
        return view($this->route . "/index")->with(['data'=>$data,'route' => $this->route, 'heading' => $this->heading, 'model' => $this->model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->route . "/create")->with(['route' => $this->route, 'heading' => $this->heading, 'model' => $this->model]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate($this->model->rules);
        $validator = Validator::make($request->all(),$this->model->rules);

        if ($validator->fails()) {
            Toastr::warning('You have not enter the required fields !!!');
            return redirect(route($this->route . ".create"));
        }
        $this->model->saveFormData($this->model, $request);
        Toastr::success($this->heading .'Added Succefully !!!');
        return redirect(route($this->route . ".index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model  =  $this->model::find($id);
        return view($this->route . "/edit")->with(['route' => $this->route, 'heading' => $this->heading, 'model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),$this->model->rules);

        $item = $this->model->find($id);
        if($request->document != ''){

            //code for remove old file
            if($item->document != ''  && $item->document != null){
                $file_old = $item->document;
                unlink(public_path("images/".$file_old));
            }
            //for update in table
            $request->document = $request->document;
        }
        $this->model->saveFormData($item, $request);
        Toastr::success($this->heading .'Updated Succefully !!!');
        return redirect(route($this->route . ".index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model::destroy($id);
        return redirect(route($this->route . ".index"));
    }
}
