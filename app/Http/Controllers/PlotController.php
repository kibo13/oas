<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use App\Models\Branch;
use App\Models\Address;
use App\Models\Street;
use Illuminate\Http\Request;

class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $streets = Street::get();
        $plots = Plot::get();
        return view('pages.plots.index', compact('plots', 'streets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = Branch::where('slug', '=', '1')->get();
        $addresses = Address::with('street')
            ->join('streets', 'addresses.street_id', '=', 'streets.id')
            ->orderBy('streets.name', 'ASC')->orderBy('num_home', 'ASC')->get();
        
        return view('pages.plots.form', compact('addresses', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plot = Plot::create([
            'branch_id' => $request['branch_id'],
        ]);

        // addresses 
        if ($request->input('addresses')) :
            $plot->addresses()->attach($request->input('addresses'));
        endif;

        return redirect()->route('plots.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function show(Plot $plot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function edit(Plot $plot)
    {
        $branches = Branch::where('slug', '=', '1')->get();
        $addresses = Address::get();
        return view('pages.plots.form', compact('addresses', 'branches', 'plot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plot $plot)
    {
        $plot->branch_id = $request['branch_id'];
        
        // addresses 
        $plot->addresses()()->detach();
        if ($request->input('addresses')) :
            $plot->addresses()->attach($request->input('addresses'));
        endif;

        $plot->save();
        return redirect()->route('plots.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plot $plot)
    {
        // addresses 
        $plot->addresses()->detach();
        $plot->delete();

        return redirect()->route('plots.index');
    }
}
