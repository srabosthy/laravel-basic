<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index(){
        return view('website.pages.index');
    }
    public function chart(){
        return view('website.pages.chart');
    }
    public function table(){
        return view('website.pages.table');
    }
}
