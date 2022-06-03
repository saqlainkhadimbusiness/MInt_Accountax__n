<?php

namespace App\Http\Controllers\Developer;

use App\ErrorLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $output['fixed']=ErrorLog::latest()->where('status','fixed')->get();
        $output['new']=ErrorLog::latest()->where('status','new')->get();
        $output['informed']=ErrorLog::latest()->where('status','informed')->get();
        $output['ignore']=ErrorLog::latest()->where('status','ignore')->get();
        return view('developer.dashboard',$output);
    }

}
