<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('contents.index');
    }

    public function hello(){
        // $fruits = ['mangga', 'jeruk', 'apel'];
        // $message = "test";
        // return view('contents.hello', compact($fruits, $test));

        $data['fruits'] = ['mangga', 'jeruk', 'apel'];
        // $data['test'] = "Test Data";
        // return view('contents.hello', $data);
        return view('contents.hello')->with($data);
    }
}
