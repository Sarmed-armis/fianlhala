<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index(LoginRequest $request)
    {


        if (Auth::attempt(['name' => $request->input('name'), 'password' => $request->input('password')])) {

            return redirect('display');


        } else {
            return "يوجد خطاء ما في المعلومات";

        }


    }
}