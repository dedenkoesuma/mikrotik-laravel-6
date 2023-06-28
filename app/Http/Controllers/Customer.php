<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customer extends Controller
{
    public function index() {
        $params = [
            'title' => 'Customer'
        ];
        return view('customer', $params);
    }
}
