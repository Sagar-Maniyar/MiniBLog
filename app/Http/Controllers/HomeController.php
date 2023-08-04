<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function home()
    {
        return view('home',['product'=> Product::get()]);
    }
}
