<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function create()
    {
        // Shows a view to create a new resource

        return view('welcome');
    }

    public function store()
    {
        // Persists the create form
        request()->validate([
            'name' => 'required',
            'email' => 'required|unique:signups',
            'demo' => 'required'
           
        ]);

        $signup = new Signup();
        $signup->name = request('name');
        $signup->email = request('email');
        $signup->demo = request('demo');
     
        $signup->save();

        return redirect('/');
    }
}
