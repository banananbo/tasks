<?php

namespace App\Http\Controllers;

class ChildController extends Controller
{
    public function index()
    {
        /*
        $count = 0;
        if (isset($_COOKIE['test'])) {
            $count = (int)$_COOKIE['test'];
        }
        $count++;
        setcookie('test', $count);

        */

        session_start();
        if (isset($_COOKIE["PHPSESSID"])){
            $count = 'session開始済み ID:'.$_COOKIE["PHPSESSID"];
        }else{
            $count = '初回訪問';
        }

        return view('child', compact('count'));
    }
}
