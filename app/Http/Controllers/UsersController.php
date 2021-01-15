<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{



    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show()
    {
        return view('users.show', ['user' => Auth::user()]);
    }



    public function edit()
    {

        return view('users.edit', ['user' => Auth::user()]);
    }


    public function update(Request $request)
    {
        // Get current user
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        // Validate the data submitted by user
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:225|'. Rule::unique('users')->ignore($user->id),
            'avatar' => 'url',
            'birthday'=> 'date|before:today'
        ]);

        // if fails redirects back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Fill user model
        $user->name = request('name');
        $user->email = request('email');
        $user->avatar= request('avatar');
        $user->birthday= request('birthday');

        // Save user to database
        $user->save();

        // Redirect to route
        return redirect()->route('user.show');
    }


    //
}
