<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detail extends Controller
{
    public function invoice() {
        $params = [
            'title' => 'Detail'
        ];
        return view('invoiceDetail', $params);
    }
    public function product() {
        $params = [
            'title' => 'Detail'
        ];
        return view('productDetail', $params);
    }
    public function customer() {
        $params = [
            'title' => 'Detail'
        ];
        return view('customerDetail', $params);
    }
}
