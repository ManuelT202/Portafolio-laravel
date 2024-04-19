<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Service_type;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('servicios.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service_types = Service_type::all();
        return view('servicios.create', compact('service_types'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'hour_value' => 'required|numeric|min:0',
            'price_per_revision' => 'required|numeric|min:0'
        ]);

        $service = new Service();
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->hour_value = $request->input('hour_value');
        $service->price_per_revision = $request->input('price_per_revision');
        $service->service_type_id = $request->input('service_type_id');
        $service->save();
        return redirect()->action([ServiceController::class, 'index'])->with('success', 'El servicio ha sido creado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('servicios.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('servicios.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'hour_value' => 'required|numeric|min:0',
            'price_per_revision' => 'required|numeric|min:0'
        ]);

        $service->update($request->all());
        return redirect()->route('servicios.index')->with('success', 'El servicio ha sido actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('servicios.index')->with('success', 'El servicio ha sido eliminado.');
    }
}

