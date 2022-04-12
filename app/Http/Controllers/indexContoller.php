<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexContoller extends Controller
{
    public function show($slug){

        $tes_seo = "$slug";
        return view('views.index');
    }
}
