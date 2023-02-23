<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    
    public function index(){
    }
    
    public function create(){


    }

    public function store(){


    }


    public function show(Request $request){

        $slug = $request->slug;
        echo $slug;
        

    }

    public function edit(){


    }

    public function update(){


    }

    public function destroy(){


    }
    
}
