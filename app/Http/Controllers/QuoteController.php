<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Quote::all();
        $services = \App\Models\Service::all();
        $users = \App\Models\User::all();
        $service_types = \App\Models\Service_type::all();
        return view('quotes.index', ['quotes' => $quotes, 'services' => $services, 'users' => $users, 'service_types' => $service_types]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = \App\Models\Service::all();
        return view('quotes.create', ['services' => $services]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $quote = new Quote();
        $quote->number_of_revisions = $request->input('number_of_revisions');
        $quote->user_id = session('user_id');
        $quote->service_id = $request->input('service_id');
        $quote->save();
        return redirect()->route('quotes.show', $quote->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $quote)
    {
        $quotes = Quote::where('id', $quote->id)->get();
        $services = \App\Models\Service::all();
        $users = \App\Models\User::all();
        $service_types = \App\Models\Service_type::all();
        return view('quotes.show', ['quotes' => $quotes, 'services' => $services, 'users' => $users, 'service_types' => $service_types]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quote $quote)
    {
        $services = \App\Models\Service::all();
        return view('quotes.edit', ['quote' => $quote, 'services' => $services]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quote $quote)
    {
        $quote->number_of_revisions = $request->input('number_of_revisions');
        $quote->user_id = session('user_id');
        $quote->service_id = $request->input('service_id');
        $quote->save();
        return redirect()->route('quotes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quote $quote)
    {
        $quote->delete();
        return redirect()->route('quotes.index');
    }

    /**
     * Download the quote details
     */
    public function download(Request $request, Quote $quote)
    {
        return $request->method() == "POST" ? $quote->download($quote->id . '.docx') : view('quotes.show', ['quote' => $quote]);
    }
}
