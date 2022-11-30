<?php

namespace App\Http\Controllers;

use App\Models\framework;
use App\Models\LanguageLibrary;
use App\Models\Languages;
use App\Models\projects;
use Illuminate\Http\Request;
use PharIo\Manifest\Library;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectData=projects::with('frameworks','libraries','languages')->get()->toArray();
        // echo"<pre>";
        // print_r($projectData);
        // die;
        return view('admindashboard.project_dashboad',compact('projectData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages=Languages::get();
        $frameworks=framework::get();
        $libraries=LanguageLibrary::get();
        // echo"<pre>";
        // print_r($libraries);
        // die;
        session()->flash('danger','please choose image size ratio 450x500 px !!');
        return view('admindashboard.add_update_data.add_project',compact('languages','frameworks','libraries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $projectData=$request->except(['_token','addnow']);
            $imgName=$request->name.".".$request->image->extension();
            // // $request->file('profile')->storeAs('uploads',$imageName); //upload image in storage folder
            $request->image->move(public_path('/projects'),$imgName);
            $projectData['image']=$imgName;

            // echo"<pre>";
            // print_r($projectData);
            // die;
           projects::create($projectData);

           return redirect()->route('project.index')->with('success','Project insert successfully!!!');
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
        $projectData=projects::find($id);
        $frameworkData=framework::get();
        $languageData=Languages::get();
        $libraryData=LanguageLibrary::get();
        // echo"<pre>";
        // print_r($frameworkData);
        // die;
        return view('admindashboard.add_update_data.update_project',compact('projectData','frameworkData','libraryData','languageData'));
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
        $requestData=$request->except(['_token','update','_method']);
        $projectData=projects::find($id);
        //  echo"<pre>";
        // print_r($modelData);
        // die;
        if(!empty($request->image))
        {

        $image=$requestData['name'].".".$request->image->extension();
        $request->image->move(public_path('projects/'),$image);
        $requestData['image']=$image;
        $exitingImage=$projectData->image;

        $projectData->update($requestData);

        $exitingImageUnlink=public_path("projects/$exitingImage");
            if(file_exists($exitingImageUnlink))
            {
                unlink("projects/$exitingImage");
            }
        }
        else
        {
        $projectData->update($requestData);
        }
        return back()->with('success','Project update succesfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
         $projectData=projects::find($id);
        //  echo"<pre>";
        //  print_r($projectData->toArray());
        //  die;
        if($projectData->image){
            unlink("projects/$projectData->image");
        }
        $projectData->delete();
        return back()->with('danger','Project deleted successfully!!!');
    }
}
