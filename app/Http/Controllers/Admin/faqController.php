<?php

namespace App\Http\Controllers\Admin;

use App\Career;
use App\Resource;
use App\Sector;
use App\Service;
use Illuminate\Http\Request;
use App\faq;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class faqController extends Controller
{
    public function index()
    {
        $faq = faq::get();
        return view('admin.faq.index', compact('faq'));
    }
  public function create()
  {
      $services =Service::all();
      $resources =Resource::all();
      $careers = Career::all();
      $sectors = Sector::all();
      return view('admin.faq.create')->with(compact('faq','services','resources','careers','sectors'));
  } 
  public function store(Request $request)
  {
      $faq= new faq();
      $faq->Question = $request->input('Question');
      $faq->Answer = $request->input('Answer');
      $faq->slugs=implode(",",array_unique($request->input('slug')));
      $faq->save();
      $slugs=array_unique($request->input('slug'));
      foreach ($slugs as $key=>$slug){
          DB::table('faq_slugs')->insert([
              'faq_id'=>$faq->id,
              'slug'=>$slug,
          ]);
      }
      return redirect()->route('admin.faq.index');  
  }
  public function edit(Faq $faq)
    {
       $slugs= explode(",",$faq->slugs);
        $services =Service::all();
        $resources =Resource::all();
        $careers = Career::all();
        $sectors = Sector::all();

        return view('admin.faq.edit', compact('faq','slugs','services','resources','careers','sectors'));
    }

    public function update(Request $request, Faq $faq)
    {
        $id=$faq->id;
        DB::table('faq_slugs')->where('faq_id',$id)->delete();
        $slugs=implode(",",array_unique($request->input('slug')));
        faq::where('id',$id)->update([
            'Question'=>$request->Question,
            'Answer'=>$request->Answer,
            'slugs'=>$slugs,
        ]);
        $slugs=array_unique($request->input('slug'));
        foreach ($slugs as $key=>$slug){
            DB::table('faq_slugs')->insert([
                'faq_id'=>$id,
                'slug'=>$slug,
            ]);
        }
        return redirect(route('admin.faq.index'))
                ->with('message', 'Record updated successfully');
    }
    public function destroy(Faq $faq)
    {
        DB::table('faq_slugs')->where('faq_id',$faq->id)->delete();
        $faq->delete();
    }

 
}
