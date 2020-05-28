<?php

namespace App\Http\Controllers;

use App\Models\Street;
use App\Models\Branch;
use App\Models\Defect;
use App\Models\Type;
use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = Bid::paginate(10);
        return view('pages.bids.index', compact('bids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $streets = Street::get();
        $branches = Branch::get();
        $defects = Defect::get();
        $types = Type::get();
        return view(
            'pages.bids.form',
            compact('streets', 'branches', 'defects', 'types')
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
        Bid::create($request->all());
        return redirect()->route('bids.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        // $streets = Street::get();
        // $organizations = Organization::get();
        // return view('pages.jobs.show', compact('job', 'streets', 'organizations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        // $type_job = config('constants.type_job');
        // $type_off = config('constants.type_off');
        // $streets = Street::get();
        // $organizations = Organization::get();
        // return view(
        //     'pages.jobs.form',
        //     compact('job', 'streets', 'organizations', 'type_job', 'type_off')
        // );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        $bid->update($request->all());
        return redirect()->route('bids.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        $bid->delete();
        return redirect()->route('bids.index');
    }
}
