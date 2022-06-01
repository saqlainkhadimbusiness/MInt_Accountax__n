<?php
use App\home;
use App\Keyword;

function keywords($route=''){

    if($route=='' ||  $route=='home'){
        $keywords= Keyword::where('slug','home')->get();
        $str='<meta name="Keywords" content="';
        foreach ($keywords as $keyword){
            $str.=$keyword->keyword.',';
        }
        $str.='">';
        return $str;
    }
    else{
        $keywords= Keyword::where('slug',$route)->get();
        $str='<meta name="Keywords" content="';
        foreach ($keywords as $keyword){
            $str.=$keyword->keyword.',';
        }
        $str.='">';
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
