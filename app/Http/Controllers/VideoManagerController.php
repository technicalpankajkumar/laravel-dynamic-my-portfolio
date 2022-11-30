<?php

namespace App\Http\Controllers;

use App\Models\VideoManager;
use Illuminate\Http\Request;

class VideoManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videoData=VideoManager::all();
        return view('admindashboard.video_manage_dashboard',compact('videoData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admindashboard.add_update_data.add_video');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData=$request->except(['_token','addnow']);

        VideoManager::create($requestData);
        // echo "<pre>";
        // print_r($requestData);
        // exit;
        return redirect()->route('video-manager.index')->with('success','Youtube Video Successfully inserted!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videoData=VideoManager::find($id);
        $videoData->delete();
        // echo"<pre>";
        // print_r($videoData);
        // die;
        return back()->with('danger','Video content successfully deleted!!!');
    }
}
