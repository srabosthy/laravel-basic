<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function home($c){
        $name = 'prama';
        $email = 'prama@gmail.com';
        $e = array('prama','omi','joyita','aparna');
        return view ('history',['name' => $name, 'email' => $email, 'category' => $c, 'employess' => $e]);
    }
}
