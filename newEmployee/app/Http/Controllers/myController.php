<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class myController extends Controller
{
    function First()
    {
    echo "My frist controller is displayed";
    }
    
    function second()
    {
        //echo "Many Functions are created";
        return view('firstview');
    }
}