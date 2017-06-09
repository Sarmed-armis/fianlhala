<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Auth;


class LoginController extends Controller
{
    public  function  index(LoginRequest $request){



        if (Auth::attempt(['email' => $request->input('name'), 'password' => $request->input('password')])) {

return redirect('display');


        }
        else{
            return "يوجد خطاء ما في المعلومات";

        }



    }
}
