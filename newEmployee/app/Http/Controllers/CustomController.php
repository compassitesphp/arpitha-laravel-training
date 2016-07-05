<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\EmployeeMaster;

class CustomController extends Controller {

    function Add() {
        echo "addition is performed";
    }

    function Sub() {
        $data['title'] = "Hello";
        $data['content'] = "subtraction is performed";
        return view('secondview', $data);
    }

    function listEmployees() {
        //  $employeeModel = new EmployeeMaster;
        $result = EmployeeMaster::all();
        dd($result);
        //var_dump($result);
        //print_r($result);
        //die();
    }

    function insertData(Request $request) {
        $employeeModel = new EmployeeMaster;
        //$data['employee_name'] = 'Rohini';
        //$data['employee_email'] = 'rohini@compassites.com';

        $employeeModel->employee_name = 'Arun';
        $employeeModel->employee_email = 'arunl@compassies.com';
        $employeeModel->Department = 'CSE';

        $employeeModel->save();
        // $this->listEmployees();
    }

    function listData() {
        $employeeModel = new EmployeeMaster;
        $result['response'] = $employeeModel->all();
        return view('display', $result);
    }

//
//    function doInsert() {
//        return view('insert');
//    }
////
//    function doUpdate() {
//        return view('update');
//    }
////
//    function doDelete() {
//        return view('delete');
//    }

    function doDelete($id) {
        $emp = EmployeeMaster::find($id);
        $emp->delete();
        dd($emp->Department);
        return view('dd');
    }

    function doInsert() {
        return view ('insert');
//        $emp = EmployeeMaster::find($id, $employee_name, $employee_email, $Department);
//        dd($emp);
//        $emp->insert();
//        return view('insert');
//        $emp->save();
    }

    function storeInsert(Request $request) {
        $employeeModel = new EmployeeMaster;
        $id = $request->input('id');
        return view('insertStored');
        $employeeModel->save();
    }

}
