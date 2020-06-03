<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use App\Models\Street;
use App\Models\Branch;
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
        $plots = Plot::orderBy('branch_id', 'ASC')
            ->orderBy('street_id', 'ASC')
            ->orderBy('num_home', 'ASC')
            ->orderBy('num_corp', 'ASC')
            ->paginate(15);
        return view('pages.plots.index', compact('plots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $streets = Street::get();
        $branches = Branch::where('slug', '=', '1')->get();
        return view(
            'pages.plots.form',
            compact('streets', 'branches')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Plot::create($request->all());
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
        $streets = Street::get();
        $branches = Branch::where('slug', '=', '1')->get();
        return view(
            'pages.plots.form',
            compact('streets', 'branches', 'plot')
        );
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
        $plot->update($request->all());
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
        $plot->delete();
        return redirect()->route('plots.index');
    }
}
