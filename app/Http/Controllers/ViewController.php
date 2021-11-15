<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showEts()
    {
        return view('ets');
    }

    function showForm()
    {
        return view('htmlphp');
    }

    function showResult()
    {
        return view('phptugas');
    }
}
