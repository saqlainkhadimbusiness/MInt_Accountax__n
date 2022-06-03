<?php

namespace App\Http\Controllers\Developer;

use App\ErrorLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ErrorLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $error_logs=ErrorLog::latest()->get();
        return view('developer.Error_logs.list',compact('error_logs'));
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

    public function view(ErrorLog $errorLog)
    {
       dd(0);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ErrorLog  $errorLog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $error=ErrorLog::where('id',$id)->first();
        return view('developer.Error_logs.view',compact('error'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ErrorLog  $errorLog
     * @return \Illuminate\Http\Response
     */
    public function edit(ErrorLog $errorLog)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ErrorLog  $errorLog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ErrorLog $errorLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ErrorLog  $errorLog
     * @return \Illuminate\Http\Response
     */
    public function changeStatus( Request $request)
    {
        $data=$request->all();
        ErrorLog::latest()->where('id',$data['id'])->update(['status'=>$data['status']]);
        return redirect(url()->previous());
    }

    public function NewErrors( )
    {
        $error_logs=ErrorLog::latest()->where('status','new')->get();
        return view('developer.Error_logs.list',compact('error_logs'));
    }


    public function FixedErrors( )
    {
        $error_logs=ErrorLog::latest()->where('status','fixed')->get();
        return view('developer.Error_logs.list',compact('error_logs'));
    }


    public function InformedErrors( )
    {
        $error_logs=ErrorLog::latest()->where('status','informed')->get();
        return view('developer.Error_logs.list',compact('error_logs'));
    }


    public function IgnoredErrors( )
    {
        $error_logs=ErrorLog::latest()->where('status','ignore')->get();
        return view('developer.Error_logs.list',compact('error_logs'));
    }



}
