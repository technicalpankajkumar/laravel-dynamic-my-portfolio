<?php

namespace App\Http\Controllers;

use App\Models\SocialMediaIcon;
use Illuminate\Http\Request;

class SocialIconsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iconsData=SocialMediaIcon::all();
        return view('admindashboard.social_icon_dashboard',compact('iconsData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admindashboard.add_update_data.add_socialMedia');
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
        $requestData=$request->except(['_token','Add Now']);
        // echo"<pre>";
        // print_r($requestData);
        // die;
        
       SocialMediaIcon::create($requestData);

       return back()->with('success','Your icon successfully inserted!!!');

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
        $destroyData=SocialMediaIcon::find($id);
        $destroyData->delete();
        return back()->with('danger','data deleted successfully!!!');
    }
}
