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
        return view('developer.Error_list');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ErrorLog  $errorLog
     * @return \Illuminate\Http\Response
     */
    public function show(ErrorLog $errorLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ErrorLog  $errorLog
     * @return \Illuminate\Http\Response
     */
    public function edit(ErrorLog $errorLog)
    {
        //
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
    public function destroy(ErrorLog $errorLog)
    {
        //
    }
}