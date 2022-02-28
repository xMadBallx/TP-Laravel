<?php

namespace App\Http\Controllers;

class ProductController
{
    public function index()
    {
        $name = 'products';

        return view('/products');
    }


    public function show($product)
    {
        return ProductController::show($product);
    }

}