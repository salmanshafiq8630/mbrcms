<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    
    public function index(){
    }
    
    // single page
    public function singlePage(Request $request){
    
    $slug = $request->slug;
    echo $slug;
    
    }
    
}
