<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function store_media_files(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image_path_name = $imageName;
        $image->move(public_path('images/'),$imageName);
        return response()->json(['success'=>$image_path_name]);
    }

    public function remove_media_files(Request $request)
    {
        if(file_exists('images/'.$request->filename) AND !empty($request->filename)){
        unlink(public_path("images/".$request->filename));
        }
        return true;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function show(Ajax $ajax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function edit(Ajax $ajax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ajax $ajax)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ajax $ajax)
    {
        //
    }
}
