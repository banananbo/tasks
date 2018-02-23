<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $inputs = \Request::all();
        var_dump($inputs);
        return view('test.form');
    }
}
