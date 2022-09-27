<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        //Pass data to view
        $title = 'Laravel Course from Vuong';
        $x = 1;
        $y = 2;

        $name = 'Vuong';
        //Use compact()
        // return view('products.index', compact('title','x','y'));
        //Use width()
        //return view('products.index')->with('name', $name);
        //Send an associative array
        $myPhone = [
            'name' => 'Iphone 14',
            'year' => 2022,
            'isFavorited' => true
        ];
        //return view('products.index', compact('myPhone'));
        //Send directly
        // return view('products.index', [
        //     'myPhone' => $myPhone
        // ]);
        print_r(route('products'));
        return view('products.index');
    }

    public function about()
    {
        return 'This is About Page';
    }

    public function detail($productName, $id)
    {
        // $phones = [
        //     'samsung' => 'samsung',
        // ];
        return "Product's name: " . $productName
            . ", Product's id: " . $id;
        // return view('products.index', [
        //     'product' => $phones[$productName]
        // ]);
    }
}
