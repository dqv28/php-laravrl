<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $name = 'Henry';
        $names = [];
        return view('about', [
            'names' => $names,
        ]);
    }
}
