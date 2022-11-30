<?php

use App\Http\Controllers\admin_Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SocialIconsController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\VideoManagerController;
use Database\Seeders\admin_seeder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{id?}',[HomeController::class,'homeData'])->name('porfolio');

Route::post('/login',[admin_Controller::class,'login'])->name('admin_Login');

Route::group(['prefix'=>'admin','middleware'=>'RoleMiddleware'],function(){
  Route::controller(admin_Controller::class)->group(function(){
        Route::get('/dashboard','adminPannel')->name('admin_pannel');
        Route::get('/logout','logout')->name('admin_logout');
        
  });
  Route::group(['prefix'=>'profile'], function(){
    Route::controller(ProfilesController::class)->group(function(){
      Route::get('/home-profile','homeProfile')->name('admin_home_profile');
      Route::post('/home-profile/{id}','homeProfileUpdate')->name('admin_home_profile_update');

      Route::get('/about-profile','aboutProfile')->name('admin_about_profile');
      Route::post('/about-profile/{id}','aboutProfileUpdate')->name('admin_about_profile_update');
      
      Route::get('/login-profile','loginProfile')->name('admin_login_profile');
    });
  });

  Route::resource('/message', MessageController::class);

  Route::resource('/project', ProjectController::class);
  Route::resource('/video-manager',VideoManagerController::class);
  Route::resource('/social-icon',SocialIconsController::class);
  // Route::resource('/technology',TechnologyController::class);

});

// Route::group(['prefix'=>'admin',])