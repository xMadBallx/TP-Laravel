<?php

namespace App\Http\Controllers;

class ContactController
{
    public function index()
    {
        $name = 'contact';

        return view('/contact');
    }

}