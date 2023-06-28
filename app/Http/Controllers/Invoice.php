<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Invoice extends Controller
{
    public function index(){
        $params = [
            'title' => 'Invoice'
        ];
        return view('invoice', $params);
    }
}
