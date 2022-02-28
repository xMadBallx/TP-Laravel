<?php

namespace App\Http\Controllers;

class CategoryController
{
    public function show($category)
    {
        return view('about-show', [
            'category' => $category,
        ]);
    }

}