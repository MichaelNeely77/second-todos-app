<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function new () 
    {
        echo "Some echoed data";

        return view('new');
    }
}
