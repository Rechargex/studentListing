<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from User Controller';
    }

    // public function show($id){
    //     $data = array(
    //         "name" => "KodegoSP404",
    //         "age" => "19",
    //         "email" => "sp404@kodego.com",
    //         "id" => $id,
    //     );
    //     // return $data;
    //     // return view('user', ['data' => $data]); //1st
    //     return view('user',$data );
    // }

    public function show($id){
        $data = ["data" => "data from database"];
        return view('user')
            ->with('data', $data)
            ->with('name', 'KodegoSP404')
            ->with('age', '19')
            ->with('email', 'sp404@kodego.com')
            ->with('id', $id);
    }
}
