<?php

namespace App\Http\Controllers;

class ProductController
{
    public function show($product)
    {
        return view('about-show', [
            'product' => $product,
        ]);
    }

}