<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class QuanLyPageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        return view('admin.index')->with('status', 'Welcome to Admin Page');
    }
    
}
