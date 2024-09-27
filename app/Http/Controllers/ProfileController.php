<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index(Request $request , $id){

        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id, 
            'name' =>$name, 
            'age' => $age,
        ];

        $cookie = cookie(
            name: 'access_token',
            value: '123-xyz',
            minutes: 1,
            path: '/',
            domain: $_SERVER['SERVER_NAME'],
            secure: true,
            httpOnly: false,
        );

        return response()->json($data , 200)->cookie($cookie);
    }
    
}











