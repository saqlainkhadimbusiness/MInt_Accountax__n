<?php

namespace App\Http\Controllers\Admin;

use App\Career;
use App\Header_Code;
use App\header_code_group;
use App\Keyword;
use App\keywords_group;
use App\Resource;
use App\Sector;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HeaderCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header_codes = header_code_group::latest()->get();
        return view('admin.header-code.index', compact('header_codes'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services =Service::all();
        $resources =Resource::all();
        $careers = Career::all();
        $sectors = Sector::all();
        return view('admin.header-code.create',compact('services','resources','careers','sectors'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $group=header_code_group::create($data);
        foreach ($data['slug'] as $key=>$slug){
            Header_Code::create(['header_code'=>$data['header_code'],'slug'=>$slug,'group_id'=>$group->id]);
        }
        return redirect(route('admin.header-code.index'))->with('message', 'Record Added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Header_Code  $header_Code
     * @return \Illuminate\Http\Response
     */
    public function show(Header_Code $header_Code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Header_Code  $header_Code
     * @return \Illuminate\Http\Response
     */
    public function edit(Header_Code $header_Code,$id)
    {
        $header_codes=DB::table('header_code_groups')
            ->leftjoin('header_codes','header_codes.group_id','=','header_code_groups.id')
            ->select('header_code_groups.name','header_codes.*')->where('header_code_groups.id',$id)->get();
        $services =Service::all();
        $resources =Resource::all();
        $careers = Career::all();
        $sectors = Sector::all();
        return view('admin.header-code.edit',compact('header_codes','services','resources','careers','sectors'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Header_Code  $header_Code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        DB::table('header_codes')->where('header_codes.group_id',$id)->delete();
        DB::table('header_code_groups')->where('header_code_groups.id',$id)->delete();

        $data=$request->all();
        $group=header_code_group::create($data);
        foreach ($data['slug'] as $key=>$slug){
            Header_Code::create(['header_code'=>$data['header_code'],'slug'=>$slug,'group_id'=>$group->id]);
        }
        return redirect(route('admin.header-code.index'))->with('message', 'Record Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Header_Code  $header_Code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header_Code $header_Code,$id)
    {
        DB::table('header_codes')->where('header_codes.group_id',$id)->delete();
        DB::table('header_code_groups')->where('header_code_groups.id',$id)->delete();
    }
}
