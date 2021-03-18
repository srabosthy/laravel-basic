<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class EmployeeIsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Session::has('username') || Session::get('userrole')!='employee'){
            Session::forget(['username','userrole']);
            return redirect()->to('login');
        }
        return $next($request);
    }
}
