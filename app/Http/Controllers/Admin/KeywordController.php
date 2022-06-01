<?php

namespace App\Http\Controllers\Admin;

use App\Career;
use App\Keyword;
use App\keywords_group;
use App\Resource;
use App\Sector;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keywords = keywords_group::latest()->get();
        return view('admin.focus-keywords.index', compact('keywords'));
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
        return view('admin.focus-keywords.create',compact('services','resources','careers','sectors'));
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
        $group=keywords_group::create($data);
        foreach ($data['slug'] as $key=>$slug){
            Keyword::create(['keyword'=>$data['keyword'],'slug'=>$slug,'group_id'=>$group->id]);
        }
        return redirect(route('admin.focus-keywords.index'))->with('message', 'Record Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Keyword  $keyword
     * @return \Illuminate\Http\Response
     */
    public function show(Keyword $keyword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Keyword  $keyword
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keywords=DB::table('keywords_groups')
            ->leftjoin('keywords','keywords.group_id','=','keywords_groups.id')
            ->select('keywords_groups.name','keywords.*')->where('keywords_groups.id',$id)->get();
        $services =Service::all();
        $resources =Resource::all();
        $careers = Career::all();
        $sectors = Sector::all();
        return view('admin.focus-keywords.edit',compact('keywords','services','resources','careers','sectors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Keyword  $keyword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keyword $keyword,$id)
    {

        DB::table('keywords')->where('keywords.group_id',$id)->delete();
        DB::table('keywords_groups')->where('keywords_groups.id',$id)->delete();
        $data=$request->all();
        $group=keywords_group::create($data);
        foreach ($data['slug'] as $key=>$slug){
            Keyword::create(['keyword'=>$data['keyword'],'slug'=>$slug,'group_id'=>$group->id]);
        }
        return redirect(route('admin.focus-keywords.index'))->with('message', 'Record Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Keyword  $keyword
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keyword $keyword,$id)
    {
        DB::table('keywords')->where('keywords.group_id',$id)->delete();
        DB::table('keywords_groups')->where('keywords_groups.id',$id)->delete();
    }
}
