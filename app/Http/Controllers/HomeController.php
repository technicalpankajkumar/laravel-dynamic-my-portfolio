<?php

namespace App\Http\Controllers;

use App\Models\AboutProfile;
use App\Models\HomeProfile;
use App\Models\projects;
use App\Models\SocialMediaIcon;
use App\Models\VideoManager;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeData($id=null){
        if(empty($id)){
        $projectData=projects::with('languages','libraries','frameworks')->get();
        }
        else{
            $projectData=projects::with('languages','libraries','frameworks')->where('framework_id',$id)->get(); 
        }
        $projectFrameworks=projects::with('frameworks')->distinct()->get('framework_id');

        $homeProfile=HomeProfile::get();
        $aboutProfile=AboutProfile::get();
        $videoData=VideoManager::get();
        $socialIcons=SocialMediaIcon::get();
        // echo"<pre>";
        // print_r($aboutProfile->toArray());
        // exit;
        return view('layout',compact('projectData','projectFrameworks','homeProfile','aboutProfile','videoData','socialIcons'));
    }

}
