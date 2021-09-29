<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('pages.login');
    }
    public function LoginSubmit(Request $request){
        $validate = $request->validate([
                'email'=>'required|email',
                'password' => [
                    'required',
                    'string',
                    'min:10',             // must be at least 10 characters in length
                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                    'regex:/[0-9]/',      // must contain at least one digit
                    'regex:/[@$!%*#?&]/', // must contain a special character
                ],
            ],
            [
                'password.required'=>'Password is required',
                'email.required'=>'Email is required',
            ]
        );
        //using class validate method
        // $this->validate(
        //     $request,
        //     [
        //         'name'=>'required|min:5|max:10',
        //         'id'=>'required',
        //         'dob'=>'required',
        //         'email'=>'email',
        //         'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        //     ],
        //     [
        //         'name.required'=>'Please put your name',
        //         'name.min'=>'Name must be greater than 2 charcters'
        //     ]
        // );

        return view('pages.success');      
    }
}
