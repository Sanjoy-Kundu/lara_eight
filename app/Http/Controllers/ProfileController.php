<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index($id){
        $name = "Donal Trump";
        $age = "75";
        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age
        ];

 
        //return response($data);
        //set cookies
        $name = "access_token";
        $value = "123-XYZ";
        $expiredTime = 1;
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure  = true;
        $httpOnly = true;

        //return $data;
        return response("cookies set successfully status code 200", 200)->cookie($name, $value, $expiredTime, $path, $domain, $secure, $httpOnly);
      
    }
}
