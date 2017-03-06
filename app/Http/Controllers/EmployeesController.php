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
            $data = DB::table('employees')
                    ->join('salaries', 'salaries.employee_id', '=', 'employees.id')
                    ->join('titles', 'titles.employee_id', '=', 'employees.id')
                    ->join('dept_emp', 'dept_emp.employee_id', '=', 'employees.id')
                    ->join('departments', 'departments.id', '=', 'dept_emp.department_id')
                    ->leftJoin('dept_manager', 'departments.id', '=', 'dept_manager.department_id')
                    ->leftJoin('employees AS manager', 'dept_manager.employee_id', '=', 'manager.id')
                    ->select('employees.*', 'salaries.*', 'dept_emp.*', 'departments.*', 'dept_manager.*',
                             'manager.first_name AS manager_first_name', 'manager.last_name AS manager_last_name',
                             'manager.hire_date AS manager_hire_date', 'manager.gender AS manager_gender')
                    ->get();
        } else {
            $data = Employees::find($id);
        }
        $data = json_decode($data);
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
