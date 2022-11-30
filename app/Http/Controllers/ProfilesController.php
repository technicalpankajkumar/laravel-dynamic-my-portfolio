<?php

namespace App\Http\Controllers;

use App\Models\AboutProfile;
use App\Models\HomeProfile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function homeProfile(){
        $homeProfileData=HomeProfile::get();
        // echo "<pre>";
        // print_r($homeProfileData[0]->name);
        // die;
        return view('admindashboard.profilesdashboard.home_profile',compact('homeProfileData'));
    }
    public function homeProfileUpdate( Request $request,$id){
        $homeProfileData=HomeProfile::find($id);
        $requestData=$request->except(['_token','update']);

        if(!empty($request->image))
        {
            $imageName=$request->name.'.'.$request->image->extension();
            $destinationFile=public_path('images/homeprofile/');
            $request->image->move($destinationFile,$imageName);
            $requestData['image']=$imageName;
    
            $existingImage=$homeProfileData->image;

            $homeProfileData->update($requestData);

            $exitingImageUnlink=public_path("images/homeprofile/$existingImage");
            if(file_exists($exitingImageUnlink))
            {
                unlink("images/homeprofile/$existingImage");
            }
        }
        else
        {
            $homeProfileData->update($requestData);
        }
        //  echo "<pre>";
        //  print_r($image);
        //  die;
        return back()->with('success','Porfile successfully updated !!');
    }

    public function aboutProfile(){
        $aboutProfileData=aboutProfile::get();
        return view('admindashboard.profilesdashboard.about_profile',compact('aboutProfileData'));
    }
    public function aboutProfileUpdate(Request $request,$id){
        $aboutProfileData=AboutProfile::find($id);
        $requestData=$request->except(['_token','update']);

        if(!empty($request->image))
        {
            $imageName="LV_".rand(0,1000).'.'.$request->image->extension();
            $destinationFile=public_path('images/aboutprofile/');
            $request->image->move($destinationFile,$imageName);
            $requestData['image']=$imageName;
    
            $existingImage=$aboutProfileData->image;

            $aboutProfileData->update($requestData);

            $exitingImageUnlink=public_path("images/aboutprofile/$existingImage");
            if(file_exists($exitingImageUnlink))
            {
                unlink("images/aboutprofile/$existingImage");
            }
        }
        else
        {
            $aboutProfileData->update($requestData);
        }
        return back()->with('success','Porfile successfully updated !!');
    }

    public function loginProfile(){
        return view('admindashboard.profilesdashboard.login_profile');
    }
}
