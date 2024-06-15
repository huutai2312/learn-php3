<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ps27199Controller extends Controller
{
    function index(){
        return view('ps27199');
    }

    function indexAdmin(){
        return view('admin/index');
    }

    function adminSanppham(){
        return view('admin/sanpham');
    }

    function adminUser(){
        return view('admin/user');
    }
}
