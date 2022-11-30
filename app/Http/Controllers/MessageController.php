<?php

namespace App\Http\Controllers;

use App\Models\Message;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messageData=Message::all();
        // echo"<pre>";
        // print_r($messageData[0]->name);
        // die;
        return view('admindashboard.message_dashboard',compact('messageData'));
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
        $messageData=$request->except(['_token','submit']);
        // echo"<pre>";
        // print_r($messageData);
        // die;
        Message::create($messageData);
        return back()->with('success','Thank for sending your message !!!');
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
        $deleteData=Message::find($id);

        $deleteData->delete();
        //  echo"<pre>";
        // print_r($deleteData);
        // die;
        return back()->with('danger','Data successfully deleted!!!');
    }
}
