<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function index(){
        $params = [
            'title' => 'Product'
        ];
        return view('product', $params);
    }
}
