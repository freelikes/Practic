<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AxiosTestController extends Controller
{
    public function getHello(Request $request){
        $name = $request->name;
        return view('hello')->with('name', $name);
    }
}
