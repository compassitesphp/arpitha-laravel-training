<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class myController extends Controller
{
    function First()
    {
    echo "All facts are interesting<br/>";
    }
    
    function second()
    {
        //echo "Many Functions are created<br/>";
        return view('firstview');
    }
    function third($fact="no facts")
    {
        echo "Intresting Facts!!! $fact<br/>";
        $this->First();
        $this->second();
    }
    
}