<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    { 
        return view('home.index');
       
    }

    public function profileView()
    {
        return view('profile.view');
    }

    public function editView()
    {
        return view('profile.edit');
    }

    public function profileViewPost()
    {
        $data = request()->validate(
            [
                'first_name' => ['required'],
                'last_name' => ['required'],
                'email' => ['required','email'],
                'phonenumber' => ['nullable'],
                'date_of_birth' => ['nullable'],
            ]
            );
        $user = Auth::user();
        $user->update($data);
        return redirect()->route("profileView");
    }
}
