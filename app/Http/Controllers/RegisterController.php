<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ],[
            'nama.required' => 'name cannot be empty',
            'email.required' => 'email cannot be empty',
            'email.email' => 'email must be valid',
            'password.required' => 'password cannot be empty',
            'password.min' => 'password must be at least 8 characters',
        ]);

        User::create([
            'name'=> $request->nama,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'role'=> 'customer'
        ]);
        session()->flash('success','Berhasil didaftarkan');
        return redirect()->route('register');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
