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
        return $str;
    }
    else{
        $keywords= Keyword::where('slug',$route)->get();
        $str='<meta name="Keywords" content="';
        foreach ($keywords as $key=>$keyword){
            $str.=(($key!=0)?',':'').$keyword->keyword;
        }
        $str.='">';
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
        return "Welcome to Mint Accountax for Online Cheap Accountants UK";
    }
}
