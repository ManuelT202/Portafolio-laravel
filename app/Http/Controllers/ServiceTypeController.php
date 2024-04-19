<?php

namespace App\Http\Controllers;

use App\Models\Service_type;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service_types = Service_type::all();
        return view('service_types.index', compact('service_types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service_type = new Service_type();
        $service_type->name = $request->input('name');
        $service_type->description = $request->input('description');
        $service_type->estimated_time = $request->input('estimated_time');
        $service_type->time_per_revision = $request->input('time_per_revision');
        $service_type->save();
        return redirect()->route('service_types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service_type $service_type)
    {
        return view('service_types.show', ['service_type' => $service_type]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service_type $service_type)
    {
        return view('service_types.edit', ['service_type' => $service_type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service_type $service_type)
    {
        $service_type->name = $request->input('name');
        $service_type->description = $request->input('description');
        $service_type->estimated_time = $request->input('estimated_time');
        $service_type->time_per_revision = $request->input('time_per_revision');
        $service_type->save();
        return redirect()->route('service_types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service_type $service_type)
    {
        $service_type->delete();
        return redirect()->route('service_types.index');
    }
}

