<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\home;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  // our services
  public function index()
  {
    $data = home::get();
    $data=DB::table('homes')->where("id",1)->first();
      return view('admin.home.index')->with(compact('data'));
  } 
  public function store(Request $request)
  {
    $home= home::where('id',1)->first();
    if(isset($home) && $home){
      $home->services_content = $request->input('services');
      $home->home_title = $request->input('home_title');
      $home->save();
    
    }else{
      $home= new home();
      $home->services_content = $request->input('services');
      $home->home_title = $request->input('home_title');
      $home->save();

     }
   
        return redirect(route('admin.home.index'));
  }
}
