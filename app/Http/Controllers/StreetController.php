<?php

namespace App\Http\Controllers;

use App\Models\Street;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $streets = Street::get();
        $streets = Street::paginate(10);
        return view('pages.streets.index', compact('streets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.streets.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Street::create($request->all());
        return redirect()->route('streets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function show(Street $street)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function edit(Street $street)
    {
        return view('pages.streets.form', compact('street'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Street $street)
    {
        $street->update($request->all());
        return redirect()->route('streets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function destroy(Street $street)
    {
        $street->delete();
        return redirect()->route('streets.index');
    }
}
