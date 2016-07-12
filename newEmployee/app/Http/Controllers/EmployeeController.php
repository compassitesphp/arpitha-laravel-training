<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Employee;

class EmployeeController extends Controller {

    function listEmployees() {
        $employee = new Employee;
        $result['response'] = $employee->all();
        return view('display', $result);
    }

    function insertEmployee() {
        return view('insert');
    }

    function insertData(Request $request) {
        $employee = new Employee;
        $employee->employee_name = $request->input('employee_name');
        $employee->employee_email = $request->input('employee_email');
        $employee->employee_department = $request->input('employee_department');
        $employee->save();
        \Session::flash('flash_message', 'Thankyou...!!!Record inserted Successfully');
        //Alert::message('record inserted');
        // Flash::message('record inserted');
        return redirect('/list');
    }

    function doEdit($id) {
        $employee = new Employee;
        $emp = $employee->where('id',$id)->first();
        $data['employeeId'] = $emp->id;
        $data['employeeName'] = $emp->employee_name;
        $data['employeeEmail'] = $emp->employee_email;
        $data['employeeDepartment'] = $emp->employee_department;
        return view('update', $data);
    }

    function updateEmployee(Request $request) {
        $employeeName = $request->input('employee_name');
        $employeeEmail = $request->input('employee_email');
        $employeeDepartment = $request->input('employee_department');
        $employeeId = $request->input('employee_id');

        $employee = new Employee;
        $data['employee_name'] = $employeeName;
        $data['employee_email'] = $employeeEmail;
        $data['employee_department'] = $employeeDepartment;
        $employee->where('id', $employeeId)->update($data);
        //$employee->save();
        \Session::flash('flash_message', 'Thankyou..!!!Record Updated Successfully');
        return redirect('/list');
    }

    function deleteEmployee($id) {
        $employee = new Employee;
        $emp = $employee->find($id);
        $emp->delete();
        \Session::flash('flash_message', 'Record deleted Successfully');
        return redirect('/list');
    }

}
