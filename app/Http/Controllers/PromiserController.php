<?php

namespace App\Http\Controllers;

use App\Models\Promiser;
use App\Models\Address;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PromiserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::now()->format('Y-m-d');
        $count = Promiser::where('date_on', null)->count();
        $promisers = Promiser::get();
        return view(
            'pages.promisers.index', 
            compact('promisers', 'count', 'today')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addresses = Address::get();
        return view('pages.promisers.form', compact('addresses'));
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promiser  $promiser
     * @return \Illuminate\Http\Response
     */
    public function edit(Promiser $promiser)
    {
        $addresses = Address::get();
        return view('pages.promisers.form', compact('addresses', 'promiser'));
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
