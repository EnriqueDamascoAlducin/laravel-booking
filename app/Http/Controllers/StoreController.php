<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(?string $urlKey = null) {
        if ($urlKey) {
            exit($urlKey);
        }

        return view('store.home');
    }
    public function product(?string $urlKey = null) {
        if ($urlKey) {
            exit($urlKey);
        }
        return view('store.home');
    }
}
