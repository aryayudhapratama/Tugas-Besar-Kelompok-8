<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index()
    {
        $pageTitle = 'About Page';

        return view('about', compact('pageTitle'));
    }
}
