<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employees',compact('employees'));
    }

    public function insert(){
        return view('insert');
    }
    public function store(Request $request){
        $obj = new Employee;
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->gender = $request->gender;
        $obj->is_active = $request->is_active;
        $obj->dob = $request->dob;
        $obj->role = $request->role;
        $obj->password = $request->password;
        
        if($obj->save()){
            return redirect()->to('employees');
        }
    }
    public function edit($id){
        $employee = Employee::find($id);
        return view ('edit',compact('employee'));
    }
    public function update(Request $request,$id){
        $obj = Employee::find($id);
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->gender = $request->gender;
        $obj->is_active = $request->is_active;
        $obj->dob = $request->dob;
        $obj->role = $request->role;
        $obj->password = $request->password;
        
        if($obj->save()){
            return redirect()->to('employees');
        }
    }
    public function delete($id){
        $obj = Employee::find($id);
        if($obj->delete()){
            return redirect()->to('employees'); 
        }
    }
    
}
