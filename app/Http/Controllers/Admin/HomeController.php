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
      $request_data = $request->all();
      $image=$request->image;
      if(isset( $image)){
          $request_data['company_image'] = request('image')->store('home');
      }
      unset($request_data['_token']);
      unset($request_data['image']);
      $home= home::where('id',1)->update(
        $request_data
    );
      return redirect(route('admin.home.index'));
  }
}
