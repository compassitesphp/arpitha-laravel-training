<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomController extends Controller
{
    function Add()
    {
    echo "addition is performed";
    }
    
      
    function Sub()
    {
        $data['title']="Hello";
        $data['content']="subtraction is performed";
        return view('secondview', $data);
    }
}
