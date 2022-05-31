<?php

namespace App\Http\Controllers;

use App\faq;
use index;
use App\Career;
use App\Review;
use App\Sector;
use App\Article;
use App\Service;
use App\Resource;
use App\ManualPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $faqs=DB::table('faqs')->get();
        $data=DB::table('homes')->where("id",1)->first();
        $articles = Article::latest()->take(3)->get();
        $services = Service::latest()->take(20)->get();
        $reviews = Review::latest()->take(20)->get();

        return view('main.index', compact('articles', 'services','data','reviews','faqs'));
    }

    public function about()
    {
        return view('main.about');
    }

    public function calculator()
    {
        return view('main.calculator');
    }

    public function payments()
    {
        $payments = ManualPayment::all();

        return view('main.payments', compact('payments'));
    }

    public function show($slug)
    {
    	if ($service = Service::whereSlug($slug)->first()) {
            $reviews = Review::latest()->take(20)->get();
            $faqs = faq::latest()->take(20)->get();
            return view('main.service.show', compact('service','reviews','faqs'));
        }

        if ($resource = Resource::whereSlug($slug)->first()) {
	        return view('main.resource.show', compact('resource'));
    	}

		if ($career = Career::whereSlug($slug)->first()) {
	        return view('main.career.show', compact('career'));
		} else {
	        $sector = Sector::whereSlug($slug)->firstOrFail();
	        return view('main.sector.show', compact('sector'));
        }
    }
}
