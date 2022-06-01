<?php
use App\home;

function keywords(){
    return "YOU are  awesome";
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
