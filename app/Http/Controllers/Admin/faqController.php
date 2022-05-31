<?php

namespace App\Http\Controllers\Admin;

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
      
    $faq = faq::get();
    $faq=DB::table('faqs')->get();
    // dd($faq);
      return view('admin.faq.create')->with(compact('faq'));
  } 
  public function store(Request $request)
  {
      $faq= new faq();
      $faq->Question = $request->input('Question');
      $faq->Answer = $request->input('Answer');
      $faq->save();
      return redirect()->route('admin.faq.index');  
  }
  public function edit(Faq $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        // return $request;
        $id=$faq->id;
        faq::where('id',$id)->update([
            'Question'=>$request->name1,
            'Answer'=>$request->name,
        ]);
        // request()->validate([
        //     'name' => 'required',
        // ]);
        
        // $faq->update($request->all());
        return redirect(route('admin.faq.index'))
                ->with('message', 'Record updated successfully');
    }
    public function destroy(Faq $faq)
    {
        $faq->delete();
    }

 
}
