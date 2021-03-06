<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Product;

class HomeController extends Controller{


    function showhome(){
        return view('frontview.home');
    }

    function showlogin(){
        return view('login');
    }

    function showabout(){
        return view('frontview.about');
    }

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showstore(){
        return view('store');
    }

    function showblank(){
        return view('blank');
    }

    function showuser(){
        return view('backview.user');
    }

    function showProduct(){
        return view('backview.product');
    }

    function showCategory(){
        return view('backview.category');
    }

    function testAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }
}