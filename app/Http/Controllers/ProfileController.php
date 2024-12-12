<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)

    {
        $name = "Donald Trump";
        $age = "75";

        // Create an associative array with data
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Create a cookie 
        $cookie = cookie(
            'access_token',
            '123-XYZ',
            1, // 1 minute
            '/',
            $_SERVER['SERVER_NAME'],
            false, // Not secure
            true  // HttpOnly
        );

        // Return response with data and cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
