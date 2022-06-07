<?php
use App\home;
use App\Keyword;

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
    if(isset($home) &&  $home->home_title ){
        return  $home->home_title;
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
          dd('isset true');
          $str='<meta name="Keywords" content="';
          $str.=$keyword->keywords_content;
          $str.='">';
          return $str;
      }
      return '';
    }

}
