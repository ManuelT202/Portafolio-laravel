<?php

namespace App\Http\Controllers;

use App\Models\User_type;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_types = User_type::all();
        return view('user_types.index', compact('user_types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_type = new User_type();
        $user_type->name = $request->input('name');
        $user_type->description = $request->input('description');
        $user_type->save();
        return redirect()->route('user_types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User_type $user_type)
    {
        return view('user_types.show', ['user_type' => $user_type]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User_type $user_type)
    {
        return view('user_types.edit', ['user_type' => $user_type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User_type $user_type)
    {
        $user_type->name = $request->input('name');
        $user_type->description = $request->input('description');
        $user_type->save();
        return redirect()->route('user_types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User_type $user_type)
    {
        $user_type->delete();
        return redirect()->route('user_types.index');
    }
}

