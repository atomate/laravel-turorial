<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        // Cookie::queue("TEST", "val1", 8)
        // cookie()->forever("TEST", "val:".time());
        // dd($_COOKIE);
        return "hello";
    }

    public function news($category="politic") {
        return view("news",['category'=>$category]);
    }

    public function do($var1, $var2) {
        return "var1: ".$var1.", var2:".$var2;
    }    
}
