<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function add()
    {
        return view('users.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|regex:/[a-zA-Z]/',
        ], [
            'name.required' => 'The User Name field is required.',
        ]);

        User::create($validatedData);

        return redirect()->route('users.index')->with('success', 'New User added successfully!');
    }
}

