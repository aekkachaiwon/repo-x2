<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Bundit Nuntates",
            "age" => 30,
        ];
        return view("welcome", $data);
    }

}
