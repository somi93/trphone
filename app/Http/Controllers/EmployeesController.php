<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employees;

class EmployeesController extends Controller
{
    public function employees(){
        isset($_GET['id']) ? $id = $_GET['id'] : $id = null;
        if($id === null) {
            $data = Employees::all();
        } else {
            $data = Employees::find($id);
        }
        return $data;
    }

    public function delete($id){
        $employee = Employees::find($id);
        $employee->delete();
        return 'Success';
    }

    public function update(Request $request, $id){
        $employee = Employees::find($id);
        $hire_date = substr($request->input('hire_date'), 4, 12);
        $hire_date = date('Y/m/d', strtotime($hire_date));
        $birth_date = substr($request->input('birth_date'), 4, 12);
        $birth_date = date('Y/m/d', strtotime($birth_date));
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->gender = $request->input('gender');
        $employee->hire_date = $hire_date;
        $employee->birth_date = $birth_date;
        $employee->save();
        return 'Success';
    }

    public function insert(Request $request){
        $employee = new Employees();
        $hire_date = substr($request->input('hire_date'), 4, 12);
        $hire_date = date('Y/m/d', strtotime($hire_date));
        $birth_date = substr($request->input('birth_date'), 4, 12);
        $birth_date = date('Y/m/d', strtotime($birth_date));
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->gender = $request->input('gender');
        $employee->hire_date = $hire_date;
        $employee->birth_date = $birth_date;
        $employee->save();
        return 'Success';
    }
}
