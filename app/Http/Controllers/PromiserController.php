<?php

namespace App\Http\Controllers;

use App\Models\Promiser;
use App\Models\Street;
use Illuminate\Http\Request;

class PromiserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = config('constants.date_now');
        $count = Promiser::where('date_on', null)->count();
        $promisers = Promiser::orderBy('date_off', 'DESC')->orderBy('date_on', 'DESC')->paginate(20);
        return view('pages.promisers.index', compact('promisers', 'count', 'today'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $streets = Street::get();
        return view('pages.promisers.form', compact('streets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Promiser::create($request->all());
        return redirect()->route('promisers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promiser  $promiser
     * @return \Illuminate\Http\Response
     */
    public function show(Promiser $promiser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promiser  $promiser
     * @return \Illuminate\Http\Response
     */
    public function edit(Promiser $promiser)
    {
        $streets = Street::get();
        return view('pages.promisers.form', compact('streets', 'promiser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promiser  $promiser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promiser $promiser)
    {
        $promiser->update($request->all());
        return redirect()->route('promisers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promiser  $promiser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promiser $promiser)
    {
        $promiser->delete();
        return redirect()->route('promisers.index');
    }
}
