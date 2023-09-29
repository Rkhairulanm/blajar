<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        return view("layouts/index");
    }
    function about()
    {
        return view("layouts/about");
    }
    function contact()
    {
        $data = [
            'judul' => 'Halaman Contact',
            'contact' => [
                'email' => 'apa@gmail.com',
            ]
        ];
        return view("layouts/contact")->with($data);
    }

}
