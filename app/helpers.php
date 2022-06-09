<?php
use App\home;
use App\Keyword;
use \Illuminate\Support\Facades\DB;

function keywords($route=''){

    $route_arr = explode("/", $route, 10);
    $route_count= count($route_arr)-1;
    $route= $route_arr[$route_count];
    if($route=='' ||  $route=='home' || count($route_arr) <= 3 ){
        $keywords= Keyword::where('slug','home')->get();
        $str='<meta name="Keywords" content="';
        foreach ($keywords as $key=>$keyword){
            $str.=(($key!=0)?',':'').$keyword->keyword;
        }
        $str.='">';
        if(count($keywords) < 1){
            return '';
        }
        return $str;
    }
    else{
        $keywords= Keyword::where('slug',$route)->get();
        $str='<meta name="Keywords" content="';
        foreach ($keywords as $key=>$keyword){
            $str.=(($key!=0)?',':'').$keyword->keyword;
        }
        $str.='">';
        if(count($keywords) < 1){
            return '';
        }
        return $str;
    }
}
function header_code($route=''){
    $route_arr = explode("/", $route, 10);
    $route_count= count($route_arr)-1;
    $route= $route_arr[$route_count];
    if($route=='' ||  $route=='home' || count($route_arr) <= 3 ){

        $header_codes= \App\Header_Code::where('slug','home')->get();
        $str='';
        foreach ($header_codes as $header_code){
            $str.=$header_code->header_code;
        }
        return $str;
    }
    else{
        $header_codes= \App\Header_Code::where('slug',$route)->get();
        $str='';
        foreach ($header_codes as $header_code){
            $str.=$header_code->header_code;
        }
        return $str;
    }
}

function home_title(){
    $home= home::where('id',1)->first();
    if(isset($home) &&  $home->meta_title ){
        return  $home->meta_title;
    }
    else{
        return " ";
    }
}
function home_title_desc(){
    $home= home::where('id',1)->first();
    if(isset($home) &&  $home->meta_title_desc ){
        return  $home->meta_title_desc;
    }
    else{
        return " ";
    }
}
function Services_keywords($route=''){

    $route_arr = explode("/", $route, 10);
    $route_count= count($route_arr)-1;
    $route= $route_arr[$route_count];
    if($route){
        $keyword=\App\Service::where('slug',$route)->first();
        if(isset($keyword->keywords_content)  && $keyword->keywords_content!='' ){
            $str='<meta name="Keywords" content="';
            $str.=$keyword->keywords_content;
            $str.='">';
            return $str;
        }
        return '';
    }

}

function FAQs($route=''){
    $str='';
    $key=0;
    $route_arr = explode("/", $route, 10);
    $route_count= count($route_arr)-1;
    $route= $route_arr[$route_count];

    if($route=='' ||  $route=='home' || count($route_arr) <= 3 ){
        $faqs_slugs= DB::table('faq_slugs')->select('faq_id')->where('slug','home')->get();
        if(count($faqs_slugs)<1){
            return '';
        }
        $str .= '<section id="faqs">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h1 class="text-center"><b>FAQ</b></h1>
                <div class="accordion mt-5" id="accordionExample">
                  <div class="card">';
        foreach ($faqs_slugs as $faqs_slug){
            $faqs= DB::table('faqs')->select('*')->where('id',$faqs_slug->faq_id)->get();

            if(isset($faqs) && count($faqs) > 0 ) {

                foreach ($faqs as  $show) {
                    $key++;
                    $str .= '<div id="accordion">
                        <div class="card">
                          <div class="card-header" id="heading' . $key . '">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed"  style="word-wrap: break-word;white-space: normal;font-weight:bolder;" data-toggle="collapse" data-target="#collapse' . $key . '" aria-expanded="false" aria-controls="collapse' . $key . '">
                                <b>  ' . $show->Question . '</b>
                              </button>
                            </h5>
                          </div>
                          <div id="collapse' . $key . '" class="collapse" aria-labelledby="heading' . $key . '" data-parent="#accordion">
                            <div class="card-body">
                              ' . $show->Answer . '
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>';
                }

            }
        }
        $str .= '</div>
                </div>
              </div>
            </div>
          </div>
        </section>
         <div style="padding-top: 100px">';
        return $str;
    }
    if($route!='' &&  $route!='home' && count($route_arr) >= 3 ){
        $faqs_slugs= DB::table('faq_slugs')->select('faq_id')->where('slug',$route)->get();
        if(count($faqs_slugs) < 1){
            return '';
        }
        $str .= '<section id="faqs">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h1 class="text-center"><b>FAQ</b></h1>
                <div class="accordion mt-5" id="accordionExample">
                  <div class="card">';
        foreach ($faqs_slugs as $faqs_slug){
            $faqs= DB::table('faqs')->select('*')->where('id',$faqs_slug->faq_id)->get();

            if(isset($faqs) && count($faqs) > 0 ) {

                foreach ($faqs as  $show) {
                    $key++;
                    $str .= '<div id="accordion">
                        <div class="card">
                          <div class="card-header" id="heading' . $key . '">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed"  style="word-wrap: break-word;white-space: normal;font-weight:bolder;" data-toggle="collapse" data-target="#collapse' . $key . '" aria-expanded="false" aria-controls="collapse' . $key . '">
                                <b>  ' . $show->Question . '</b>
                              </button>
                            </h5>
                          </div>
                          <div id="collapse' . $key . '" class="collapse" aria-labelledby="heading' . $key . '" data-parent="#accordion">
                            <div class="card-body">
                              ' . $show->Answer . '
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>';
                }

            }
        }
        $str .= '</div>
                </div>
              </div>
            </div>
          </div>
        </section>
         <div style="padding-top: 100px">';
        return $str;

    }
}
