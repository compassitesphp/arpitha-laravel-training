<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;

class EmployeeController extends Controller
{
    function listEmployees()
    {
    	$employee=new Employee;
    	$result['response']=$employee->all();
    	return view('display',$result);
    }

    function insertEmployee()
    {
    	return view('insert');
    }

    function insertData(Request $request)
    {
    	$employee=new Employee;
    	$employee->employee_name=$request->input('employee_name');
    	$employee->employee_email=$request->input('employee_email');
    	$employee->employee_department=$request->input('employee_department');
    	$employee->save();
    	return redirect('/list');
    }
}
