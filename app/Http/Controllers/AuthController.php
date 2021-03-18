<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Session;
class AuthController extends Controller
{
    public function login() {
        return view('login');
    }
    public function logout() {
        Session::forget(['username','userrole']);
        return redirect()->to('login');
    }
    public function storelogin(Request $req) {
        // echo $req->email.'<br>'.$req->password;
        $email =  $req->email;
        $password =  $req->password;
        $user = Employee::where('email','=',$email)
        ->where('password','=',$password)
        ->first(); //it return row
        if($user) {
            Session::put('username', $user->name);
            Session::put('userrole', $user->role);
            if($user->role=='admin'){
                return redirect()->to('employees');
            }
            else if($user->role=='employee'){
                return redirect()->to('employeehome');
            }
        }
        else {
            return redirect()->back()->with('err_msg','Invalid Email or Password!');
        }
    }
    public function employeehome() {
        return view('employeehome');
    }
}