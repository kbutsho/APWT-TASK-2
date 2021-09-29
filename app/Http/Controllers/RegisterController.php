<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showReg()
    {
        return view('pages.registration');
    }
    public function RegisterSubmit(Request $request)
    {
        //using requests validate method
        $validate = $request->validate(
            [
                'name' => 'required|min:4|max:15',
                'dob' => 'required',
                'email' => 'required|email',
                // 'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'password' => [
                    'required',
                    'string',
                    'min:10',             // must be at least 10 characters in length
                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                    'regex:/[0-9]/',      // must contain at least one digit
                    'regex:/[@$!%*#?&]/' // must contain a special character

                ],
                'password_confirmation' => [
                    'required',
                    'same:password',
                    'min:10'
                ]
            ],
            [
                'password_confirmation.required' => 'Confirm Password is Required',
                'password_confirmation.same' => 'Password and Confirm Password must match!',
                'password.required' => 'Password is required',
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'name.min' => 'Name must be greater than 5 characters',
                'name.max' => 'Name must be less than 15 characters'
            ]
        );
        return view('pages.success');
    }
}
