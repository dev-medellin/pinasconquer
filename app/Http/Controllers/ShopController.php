<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    // Show the shop page
    public function index()
    {
        return view('pages.shop');
    }
}